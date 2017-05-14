<?php

namespace Sdmx\api\entities;


class PortableTimeSeries
{

    /**
     * @var string $frequency
     */
    private $frequency;

    /**
     * @var string $dataflow
     */
    private $dataflow;

    /**
     * @var string[] $attributes
     */
    private $attributes;

    /**
     * @var string[] $dimensions
     */
    private $dimensions;

    /**
     * @var string[] $timeSlots
     */
    private $timeSlots;

    /**
     * @var double[] $observations
     */
    private $observations;

    /**
     * @var string[] $statuses
     */
    private $statuses;

    /**
     * Hash string -> string[]
     * @var string[] $obsLevelAttributes
     */
    private $obsLevelAttributes;

    /**
     * @var string $name
     */
    private $name;

    /**
     * PortableTimeSeries constructor.
     */
    public function __construct()
    {
        $this->attributes = [];
        $this->dimensions = [];
        $this->timeSlots = [];
        $this->observations = [];
        $this->statuses = [];
        $this->obsLevelAttributes = [];
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param string $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return string
     */
    public function getDataflow()
    {
        return $this->dataflow;
    }

    /**
     * @param string $dataflow
     */
    public function setDataflow($dataflow)
    {
        $this->dataflow = $dataflow;
    }

    /**
     * @return \string[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param \string[] $attributes
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return \string[]
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param \string[] $dimensions
     */
    public function setDimensions(array $dimensions)
    {
        $this->dimensions = $dimensions;
    }

    /**
     * @return \string[]
     */
    public function getTimeSlots()
    {
        return $this->timeSlots;
    }

    /**
     * @param \string[] $timeSlots
     */
    public function setTimeSlots(array $timeSlots)
    {
        if (count($timeSlots) !== count($this->observations)) {
            throw new \InvalidArgumentException('Error setting dates in time series. Wrong dates number.');
        }

        $this->timeSlots = $timeSlots;
    }

    /**
     * @param \string[] $obsLevelAttributes
     */
    public function setObsLevelAttributes($obsLevelAttributes)
    {
        $this->obsLevelAttributes = $obsLevelAttributes;
    }

    /**
     * @return \double[]
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * @param \double[] $observations
     */
    public function setObservations(array $observations)
    {
        if (count($observations) !== count($this->timeSlots)) {
            throw new \InvalidArgumentException('Error setting data in time series. Wrong observation number.');
        }

        $this->observations = $observations;
    }

    /**
     * @return \string[]
     */
    public function getStatuses()
    {
        return $this->statuses;
    }

    /**
     * @param \string[] $statuses
     */
    public function setStatuses(array $statuses)
    {
        $this->statuses = $statuses;
    }

    /**
     * @return string
     */
    public function getName()
    {
        $name = $this->name;

        if ($name == null) {
            if (count($this->dimensions) > 0) {
                if ($this->dataflow !== null) {
                    $name = $this->dataflow . '.';
                } else {
                    $name = '';
                }

                $mapFunc = function ($dimension) {
                    $tokens = explode('=', $dimension);
                    return $tokens[1];
                };
                $name .= join('.', array_map($mapFunc, $this->dimensions));
            }
        }

        return $name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $code
     * @return string
     */
    public function getAttributeValue($code)
    {
        return $this->findValue($code, $this->attributes);
    }

    /**
     * @param string $code
     * @param string[] $collection
     * @return string
     */
    private function findValue($code, $collection)
    {
        $value = null;

        foreach ($collection as $element) {
            $tokens = explode('=', $element);
            if ($tokens[0] === $code && $tokens[1] !== null) {
                $value = $tokens[1];
                break;
            }
        }

        return $value;
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function addAttribute($key, $value)
    {
        $this->addKeyValueToCollection($key, $value, $this->attributes);
    }

    /**
     * @param string $key
     * @param string $value
     * @param string[] $collection
     */
    private function addKeyValueToCollection($key, $value, array &$collection)
    {
        $value = trim($key) . '=' . trim($value);
        if (!in_array($value, $collection)) {
            $collection[] = $value;
        }

    }

    /**
     * @param string $code
     * @return string
     */
    public function getDimensionValue($code)
    {
        return $this->findValue($code, $this->dimensions);
    }

    /**
     * @param string $code
     * @param string $value
     */
    public function setDimensionValue($code, $value)
    {
        for ($i = 0; $i < count($this->dimensions); $i++) {
            $element = $this->dimensions[$i];
            $tokens = explode('=', $element);
            if ($tokens[0] === $code) {
                $this->dimensions[$i] = "$code=$value";
                break;
            }
        }
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function addDimension($key, $value)
    {
        $this->addKeyValueToCollection($key, $value, $this->dimensions);
    }

    /**
     * @param string $observation
     * @param string $timeSlot
     * @param string[] $attributes (Hash string -> string)
     */
    public function addObservation($observation, $timeSlot, array $attributes)
    {
        if ($observation == null) {
            $this->observations[] = null;
        } else {
            $this->observations[] = floatval($observation);
        }

        $timeSlot = ($timeSlot == null) ? '' : $timeSlot;
        $this->timeSlots[] = $timeSlot;
        $numberOfSlots = count($this->timeSlots);

        foreach ($attributes as $key => $value) {
            if ($key === 'OBS_STATUS') {
                $this->statuses[] = $value;
            }
            if (array_key_exists($key, $this->obsLevelAttributes)) {
                $this->obsLevelAttributes[$key][] = $value;
            } else {
                $this->obsLevelAttributes[$key] = array_fill(0, $numberOfSlots - 1, '');
                $this->obsLevelAttributes[$key][] = $value;
            }
        }

        foreach ($this->obsLevelAttributes as $key => $values) {
            if (count($values) < $numberOfSlots) {
                $this->obsLevelAttributes[$key][] = '';
            }
        }
    }

    /**
     * @return string[]
     */
    public function getObsLevelAttributesNames()
    {
        return array_keys($this->obsLevelAttributes);
    }

    /**
     * @param string $attrName
     * @return array
     */
    public function getObsLevelAttributes($attrName)
    {
        return array_key_exists($attrName, $this->obsLevelAttributes) ? $this->obsLevelAttributes[$attrName] : [];
    }

    public function reverse()
    {
        $this->observations = array_reverse($this->observations);
        $this->timeSlots = array_reverse($this->timeSlots);
        foreach ($this->obsLevelAttributes as $key => $value) {
            $this->obsLevelAttributes[$key] = array_reverse($value);
        }
    }
}