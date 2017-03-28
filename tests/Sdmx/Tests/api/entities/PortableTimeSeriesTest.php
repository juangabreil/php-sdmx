<?php

namespace Sdmx\Tests\api\entities;


use PHPUnit\Framework\TestCase;
use Sdmx\api\entities\PortableTimeSeries;


class PortableTimeSeriesTest extends TestCase
{
    /**
     * @var PortableTimeSeries $portableSeries
     */
    private $portableSeries;

    public function testAddAttribute()
    {
        $portableTimeSeries = $this->portableSeries;
        $portableTimeSeries->addAttribute('someKey', 'someValue');

        $this->assertSame('someKey=someValue', $portableTimeSeries->getAttributes()[0]);
    }

    public function testGetAttributeValue()
    {
        $portableTimeSeries = $this->portableSeries;
        $portableTimeSeries->addAttribute('someKey', 'someValue');
        $value = $portableTimeSeries->getAttributeValue('someKey');

        $this->assertSame('someValue', $value);
    }

    public function testAddDimension()
    {
        $portableTimeSeries = $this->portableSeries;
        $portableTimeSeries->addDimension('SomeKey', 'SomeValue');

        $this->assertSame('SomeKey=SomeValue', $portableTimeSeries->getDimensions()[0]);
    }

    public function testGetDimensionValue()
    {
        $portableTimeSeries = $this->portableSeries;
        $portableTimeSeries->addDimension('SomeKey', 'SomeValue');

        $this->assertSame('SomeValue', $portableTimeSeries->getDimensionValue('SomeKey'));
    }

    public function testGetNameShouldReturnNameWhenDefined()
    {
        $portableTimeSeries = $this->portableSeries;
        $portableTimeSeries->setName('SomeName');
        $name = $portableTimeSeries->getName();

        $this->assertSame('SomeName', $name);
    }

    public function testGetNameShouldGenerateItFromSeriesInfoWhenNotDefined()
    {
        $portableTimeSeries = $this->portableSeries;
        $portableTimeSeries->setDataflow('SomeDataflow');
        $portableTimeSeries->setDimensions(['a=1', 'b=2']);

        $name = $portableTimeSeries->getName();

        $this->assertSame('SomeDataflow.1.2', $name);
    }

    public function testGetNameShouldGenerateItFromSeriesInfoDataflowNotDefinedWhenNotDefined()
    {
        $portableTimeSeries = $this->portableSeries;
        $portableTimeSeries->setDimensions(['a=1', 'b=2']);

        $name = $portableTimeSeries->getName();

        $this->assertSame('1.2', $name);
    }

    public function testGetNameShouldReturnNullWhenThereIsNotEnoughDataToGetIt()
    {
        $portableTimeSeries = $this->portableSeries;

        $name = $portableTimeSeries->getName();

        $this->assertNull($name);
    }

    public function testAddObservation()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2001', ['someKey' => 'someValue']);

        $this->assertSame(1.0, $portableTimeSeries->getObservations()[0]);
    }

    public function testAddNullObservation()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('', '2001', ['someKey' => 'someValue']);

        $this->assertNull($portableTimeSeries->getObservations()[0]);
    }

    public function testAddObservationShouldAddNewTimeSlot()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2001', ['someKey' => 'someValue']);

        $this->assertSame('2001', $portableTimeSeries->getTimeSlots()[0]);
    }

    public function testAddObservationShouldAddEmptyTimeSlot()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', null, ['someKey' => 'someValue']);

        $this->assertSame('', $portableTimeSeries->getTimeSlots()[0]);
    }

    public function testAddObservationShouldAddStatusWhenAttributesHoldObsStatus()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2001', ['OBS_STATUS' => 'someValue']);

        $this->assertSame('someValue', $portableTimeSeries->getStatuses()[0]);
    }

    public function testAddObservationShouldAddAttributeValueAtObservationLevel()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2001', ['someKey' => 'someValue']);

        $this->assertSame(['someValue'], $portableTimeSeries->getObsLevelAttributes('someKey'));
    }

    public function testAddObservationShouldAddAttributeValueAtObservationLevelUpdatingEntry()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2001', ['someKey' => 'someValue1']);
        $portableTimeSeries->addObservation('2.0', '2000', ['someKey' => 'someValue2']);

        $this->assertSame(['someValue1', 'someValue2'], $portableTimeSeries->getObsLevelAttributes('someKey'));
    }

    public function testAddObservationShouldFillGapsForSeriesWithoutValues()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2001', ['someKey' => 'someValue1', 'otherKey' => 'otherValue']);
        $portableTimeSeries->addObservation('2.0', '2000', ['someKey' => 'someValue2']);

        $this->assertSame(['otherValue', ''], $portableTimeSeries->getObsLevelAttributes('otherKey'));
    }

    public function testReverseData()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2000', ['someKey' => 'someValue1', 'otherKey' => 'otherValue']);
        $portableTimeSeries->addObservation('2.0', '2001', ['someKey' => 'someValue2']);

        $portableTimeSeries->reverse();

        $this->assertSame([2.0, 1.0], $portableTimeSeries->getObservations());
        $this->assertSame(['2001', '2000'], $portableTimeSeries->getTimeSlots());
        $this->assertSame(['someValue2', 'someValue1'], $portableTimeSeries->getObsLevelAttributes('someKey'));
        $this->assertSame(['', 'otherValue'], $portableTimeSeries->getObsLevelAttributes('otherKey'));
    }

    public function testGetObsLevelAttributesNames()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2000', ['someKey' => 'someValue1', 'otherKey' => 'otherValue']);
        $portableTimeSeries->addObservation('2.0', '2001', ['someKey' => 'someValue2']);

        $names = $portableTimeSeries->getObsLevelAttributesNames();

        $this->assertSame(['someKey', 'otherKey'], $names);
    }

    public function testSetObservations()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2000', ['someKey' => 'someValue1', 'otherKey' => 'otherValue']);
        $portableTimeSeries->addObservation('2.0', '2001', ['someKey' => 'someValue2']);

        $portableTimeSeries->setObservations([1, 2]);

        $this->assertEquals([1, 2], $portableTimeSeries->getObservations());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetObservationsThrowExceptionBecauseItExpectsSameNumberOfElementsThanTimeSlots()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2000', ['someKey' => 'someValue1', 'otherKey' => 'otherValue']);
        $portableTimeSeries->addObservation('2.0', '2001', ['someKey' => 'someValue2']);

        $portableTimeSeries->setObservations([1]);
    }

    public function testSetTimeSlot()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2000', ['someKey' => 'someValue1', 'otherKey' => 'otherValue']);
        $portableTimeSeries->addObservation('2.0', '2001', ['someKey' => 'someValue2']);

        $portableTimeSeries->setTimeSlots(['2000', '2002']);

        $this->assertEquals(['2000', '2002'], $portableTimeSeries->getTimeSlots());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetTimeSlotThrowExceptionBecauseItExpectsSameNumberOfElementsThanObservations()
    {
        $portableTimeSeries = $this->portableSeries;

        $portableTimeSeries->addObservation('1.0', '2000', ['someKey' => 'someValue1', 'otherKey' => 'otherValue']);
        $portableTimeSeries->addObservation('2.0', '2001', ['someKey' => 'someValue2']);

        $portableTimeSeries->setTimeSlots(['2000']);
    }

    protected function setUp()
    {
        $this->portableSeries = new PortableTimeSeries();
    }


}
