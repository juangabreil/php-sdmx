<?php

namespace Sdmx\Tests\api\parser;

class ParserFixtures
{
    public static $DATA_FLOW = <<<XML
<mes:Structure xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:mes="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message" xmlns:str="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/structure" xmlns:com="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/common" xsi:schemaLocation="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message https://registry.sdmx.org/schemas/v2_1/SDMXMessage.xsd">
	<mes:Header>
		<mes:ID>IDREF716ce69f-ae7c-443f-ac4c-ac3446a0dca9</mes:ID>
		<mes:Test>false</mes:Test>
		<mes:Prepared>2017-02-11T21:09:28</mes:Prepared>
		<mes:Sender id="UNESCO-Registry" />
		<mes:Receiver id="not_supplied" />
	</mes:Header>
	<mes:Structures>
		<str:Dataflows>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:CE(1.0)" isExternalReference="false" agencyID="UNESCO" id="CE" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Cultural employment</com:Name>
				<com:Name xml:lang="es">Empleo cultural</com:Name>
				<str:Structure>
					<Ref package="datastructure" agencyID="UNESCO" id="CE" version="1.0" class="DataStructure" />
				</str:Structure>
			</str:Dataflow>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:DEM_ECO(1.0)" isExternalReference="false" agencyID="UNESCO" id="DEM_ECO" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Demographic and socio-economic indicators</com:Name>
				<com:Name xml:lang="es">Indicadores demográficos y socioeconómicos</com:Name>
				<str:Structure>
					<Ref package="datastructure" agencyID="UNESCO" id="DEM_ECO" version="1.0" class="DataStructure" />
				</str:Structure>
			</str:Dataflow>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:EDU_FINANCE(1.0)" isExternalReference="false" agencyID="UNESCO" id="EDU_FINANCE" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Education: Financial resources</com:Name>
				<com:Name xml:lang="es">Educación: Recursos financieros</com:Name>
				<str:Structure>
					<Ref package="datastructure" agencyID="UNESCO" id="EDU_FINANCE" version="1.0" class="DataStructure" />
				</str:Structure>
			</str:Dataflow>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:EDU_NON_FINANCE(1.0)" isExternalReference="false" agencyID="UNESCO" id="EDU_NON_FINANCE" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Education: Students and Teachers</com:Name>
				<com:Name xml:lang="es">Educación: Estudiantes y docentes</com:Name>
				<str:Structure>
					<Ref package="datastructure" agencyID="UNESCO" id="EDU_NON_FINANCE" version="1.0" class="DataStructure" />
				</str:Structure>
			</str:Dataflow>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:EDU_REGIONAL_MODULE(1.0)" isExternalReference="false" agencyID="UNESCO" id="EDU_REGIONAL_MODULE" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Education: Regional module</com:Name>
				<com:Name xml:lang="es">Educación: Módulo regional</com:Name>
				<str:Structure>
					<Ref package="datastructure" agencyID="UNESCO" id="EDU_REGIONAL_MODULE" version="1.0" class="DataStructure" />
				</str:Structure>
			</str:Dataflow>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:FF(1.0)" isExternalReference="false" agencyID="UNESCO" id="FF" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Feature film</com:Name>
				<com:Name xml:lang="es">Películas de largometraje</com:Name>
				<str:Structure>
					<Ref package="datastructure" agencyID="UNESCO" id="FF" version="1.0" class="DataStructure" />
				</str:Structure>
			</str:Dataflow>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:INNOV(1.0)" isExternalReference="false" agencyID="UNESCO" id="INNOV" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Innovation</com:Name>
				<com:Name xml:lang="es">Innovación</com:Name>
				<str:Structure>
					<Ref package="datastructure" agencyID="UNESCO" id="INNOV" version="1.0" class="DataStructure" />
				</str:Structure>
			</str:Dataflow>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:RD(1.0)" isExternalReference="false" agencyID="UNESCO" id="RD" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Research and experimental development</com:Name>
				<com:Name xml:lang="es">Investigación y desarrollo</com:Name>
				<str:Structure>
					<Ref package="datastructure" agencyID="UNESCO" id="RD" version="1.0" class="DataStructure" />
				</str:Structure>
			</str:Dataflow>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:SDG4(1.0)" isExternalReference="false" agencyID="UNESCO" id="SDG4" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Sustainable Development Goal 4</com:Name>
				<com:Name xml:lang="es">Objetivo de Desarrollo Sostenible 4</com:Name>
				<str:Structure>
					<Ref package="datastructure" agencyID="UNESCO" id="SDG4" version="1.0" class="DataStructure" />
				</str:Structure>
			</str:Dataflow>
		</str:Dataflows>
	</mes:Structures>
</mes:Structure>
XML;

}