<?php

namespace Sdmx\Tests\api\parser\v21;

class ParserFixtures
{
    public static $DATA_FLOW = <<<XML
<mes:Structure xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:mes="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message" xmlns:str="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/structure" xmlns:com="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/common" xsi:schemaLocation="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message https://registry.sdmx.org/schemas/v2_1/SDMXMessage.xsd">
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
		</str:Dataflows>
	</mes:Structures>
</mes:Structure>
XML;

    public static $DATA_FLOW1 = <<<XML
<mes:Structure xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:mes="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message" xmlns:str="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/structure" xmlns:com="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/common" xsi:schemaLocation="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message https://registry.sdmx.org/schemas/v2_1/SDMXMessage.xsd">
	<mes:Structures>
		<str:Dataflows>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:CE(1.0)" isExternalReference="false" agencyID="UNESCO" id="CE" isFinal="false" version="1.0">
				<str:Structure>
					<Ref package="datastructure" agencyID="UNESCO" id="CE" version="1.0" class="DataStructure" />
				</str:Structure>
			</str:Dataflow>
		</str:Dataflows>
	</mes:Structures>
</mes:Structure>
XML;

    public static $DATA_FLOW2 = <<<XML
<mes:Structure xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:mes="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message" xmlns:str="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/structure" xmlns:com="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/common" xsi:schemaLocation="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message https://registry.sdmx.org/schemas/v2_1/SDMXMessage.xsd">
	<mes:Structures>
		<str:Dataflows>
			<str:Dataflow urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:CE(1.0)" isExternalReference="false" agencyID="UNESCO" id="CE" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Cultural employment</com:Name>
				<com:Name xml:lang="es">Empleo cultural</com:Name>
			</str:Dataflow>
		</str:Dataflows>
	</mes:Structures>
</mes:Structure>
XML;

}