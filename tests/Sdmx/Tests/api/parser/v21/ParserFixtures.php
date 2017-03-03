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

    public static $DATA_STRUCTURE = <<<XML
<mes:Structure xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:mes="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message" xmlns:str="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/structure" xmlns:com="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/common" xsi:schemaLocation="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message https://registry.sdmx.org/schemas/v2_1/SDMXMessage.xsd">
	<mes:Header>
		<mes:ID>IDREFd471991c-7175-4756-8487-ad195dded8d9</mes:ID>
		<mes:Test>false</mes:Test>
		<mes:Prepared>2017-02-25T18:14:58</mes:Prepared>
		<mes:Sender id="UNESCO-Registry" />
		<mes:Receiver id="not_supplied" />
	</mes:Header>
	<mes:Structures>
		<str:DataStructures>
			<str:DataStructure urn="urn:sdmx:org.sdmx.infomodel.datastructure.DataStructure=UNESCO:EDU_FINANCE(1.0)" isExternalReference="false" agencyID="UNESCO" id="EDU_FINANCE" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Education: Financial resources</com:Name>
				<com:Name xml:lang="es">Educación: Recursos financieros</com:Name>
				<com:Name xml:lang="fr">Education: ressources financières</com:Name>
				<str:DataStructureComponents>
					<str:DimensionList urn="urn:sdmx:org.sdmx.infomodel.datastructure.DimensionDescriptor=UNESCO:EDU_FINANCE(1.0).DimensionDescriptor" id="DimensionDescriptor">
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).UNIT_MEASURE" id="UNIT_MEASURE" position="1">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="UNIT_MEASURE" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_UNIT" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).STAT_UNIT" id="STAT_UNIT" position="2">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="STAT_UNIT" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_STAT_UNIT" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).REF_AREA" id="REF_AREA" position="3">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="REF_AREA" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_AREA" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).EXPENDITURE_TYPE" id="EXPENDITURE_TYPE" position="4">
							<str:ConceptIdentity>
								<Ref maintainableParentID="EDU" package="conceptscheme" maintainableParentVersion="1.0" agencyID="UNESCO" id="EXPENDITURE_TYPE" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_EXPENDITURE_TYPE" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).SECTOR_EDU" id="SECTOR_EDU" position="5">
							<str:ConceptIdentity>
								<Ref maintainableParentID="EDU" package="conceptscheme" maintainableParentVersion="1.0" agencyID="UNESCO" id="SECTOR_EDU" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_SECTOR_EDU" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).EDU_CAT" id="EDU_CAT" position="6">
							<str:ConceptIdentity>
								<Ref maintainableParentID="EDU" package="conceptscheme" maintainableParentVersion="1.0" agencyID="UNESCO" id="EDU_CAT" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_EDU_CAT" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).EDU_LEVEL" id="EDU_LEVEL" position="7">
							<str:ConceptIdentity>
								<Ref maintainableParentID="EDU" package="conceptscheme" maintainableParentVersion="1.0" agencyID="UNESCO" id="EDU_LEVEL" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_EDU_LEVEL" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:TimeDimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.TimeDimension=UNESCO:EDU_FINANCE(1.0).TIME_PERIOD" id="TIME_PERIOD" position="8">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="TIME_PERIOD" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:TextFormat />
							</str:LocalRepresentation>
						</str:TimeDimension>
					</str:DimensionList>
					<str:AttributeList urn="urn:sdmx:org.sdmx.infomodel.datastructure.AttributeDescriptor=UNESCO:EDU_FINANCE(1.0).AttributeDescriptor" id="AttributeDescriptor">
						<str:Attribute urn="urn:sdmx:org.sdmx.infomodel.datastructure.DataAttribute=UNESCO:EDU_FINANCE(1.0).UNIT_MULT" assignmentStatus="Conditional" id="UNIT_MULT">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="UNIT_MULT" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="SDMX" id="CL_UNIT_MULT" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
							<str:AttributeRelationship>
								<str:PrimaryMeasure>
									<Ref id="OBS_VALUE" />
								</str:PrimaryMeasure>
							</str:AttributeRelationship>
						</str:Attribute>
						<str:Attribute urn="urn:sdmx:org.sdmx.infomodel.datastructure.DataAttribute=UNESCO:EDU_FINANCE(1.0).FREQ" assignmentStatus="Conditional" id="FREQ">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="FREQ" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="SDMX" id="CL_FREQ" version="2.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
							<str:AttributeRelationship>
								<str:PrimaryMeasure>
									<Ref id="OBS_VALUE" />
								</str:PrimaryMeasure>
							</str:AttributeRelationship>
						</str:Attribute>
						<str:Attribute urn="urn:sdmx:org.sdmx.infomodel.datastructure.DataAttribute=UNESCO:EDU_FINANCE(1.0).DECIMALS" assignmentStatus="Conditional" id="DECIMALS">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="DECIMALS" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="SDMX" id="CL_DECIMALS" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
							<str:AttributeRelationship>
								<str:PrimaryMeasure>
									<Ref id="OBS_VALUE" />
								</str:PrimaryMeasure>
							</str:AttributeRelationship>
						</str:Attribute>
						<str:Attribute urn="urn:sdmx:org.sdmx.infomodel.datastructure.DataAttribute=UNESCO:EDU_FINANCE(1.0).OBS_STATUS" assignmentStatus="Conditional" id="OBS_STATUS">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="OBS_STATUS" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_OBS_STATUS" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
							<str:AttributeRelationship>
								<str:PrimaryMeasure>
									<Ref id="OBS_VALUE" />
								</str:PrimaryMeasure>
							</str:AttributeRelationship>
						</str:Attribute>
					</str:AttributeList>
					<str:MeasureList urn="urn:sdmx:org.sdmx.infomodel.datastructure.MeasureDescriptor=UNESCO:EDU_FINANCE(1.0).MeasureDescriptor" id="MeasureDescriptor">
						<str:PrimaryMeasure urn="urn:sdmx:org.sdmx.infomodel.datastructure.PrimaryMeasure=UNESCO:EDU_FINANCE(1.0).OBS_VALUE" id="OBS_VALUE">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="OBS_VALUE" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:TextFormat isSequence="false" textType="Double" />
							</str:LocalRepresentation>
						</str:PrimaryMeasure>
					</str:MeasureList>
				</str:DataStructureComponents>
			</str:DataStructure>
		</str:DataStructures>
	</mes:Structures>
</mes:Structure>
XML;

    public static $DATA_STRUCTURE1 = <<<XML
<mes:Structure xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:mes="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message" xmlns:str="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/structure" xmlns:com="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/common" xsi:schemaLocation="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message https://registry.sdmx.org/schemas/v2_1/SDMXMessage.xsd">
	<mes:Header>
		<mes:ID>IDREF1f9ad08d-b03c-43d0-adb7-9673ba85d4a6</mes:ID>
		<mes:Test>false</mes:Test>
		<mes:Prepared>2017-02-25T18:16:43</mes:Prepared>
		<mes:Sender id="UNESCO-Registry" />
		<mes:Receiver id="not_supplied" />
	</mes:Header>
	<mes:Structures>
		<str:OrganisationSchemes>
			<str:AgencyScheme urn="urn:sdmx:org.sdmx.infomodel.base.AgencyScheme=SDMX:AGENCIES(1.0)" isExternalReference="false" agencyID="SDMX" id="AGENCIES" isFinal="false" version="1.0">
				<com:Name xml:lang="en">SDMX Agency Scheme</com:Name>
				<str:Agency urn="urn:sdmx:org.sdmx.infomodel.base.Agency=SDMX" id="SDMX">
					<com:Name xml:lang="en">SDMX</com:Name>
					<com:Description xml:lang="en">SDMX is an initiative to foster standards for the exchange of statistical information. It is sponsored by the Bank for International Settlements (BIS), the European Central Bank (ECB), the Statistical Office of the European Union (Eurostat), the International Monetary Fund (IMF), the Organization for Economic Co-Operation and Development (OECD), the United Nations (UN) and the World Bank.</com:Description>
					<str:Contact>
						<com:Name xml:lang="en">SDMX Secretariat</com:Name>
						<str:Department xml:lang="en">SDMX Secretariat</str:Department>
						<str:Role xml:lang="en">Single entry point for external inquiries</str:Role>
						<str:URI>http://sdmx.org</str:URI>
						<str:Email>secretariat@sdmx.org</str:Email>
					</str:Contact>
				</str:Agency>
				<str:Agency urn="urn:sdmx:org.sdmx.infomodel.base.Agency=UNESCO" id="UNESCO">
					<com:Name xml:lang="en">United Nations Organization for Education, Science and Culture (UNESCO)</com:Name>
					<com:Description xml:lang="en">UNESCO strives to build networks among nations that enable humanity's moral and intellectual solidarity, by:

• Mobilizing for education: so that every child, boy or girl, has access to quality education as a fundamental human right and as a prerequisite for human development. 

• Building intercultural understanding: through protection of heritage and support for cultural diversity. UNESCO created the idea of World Heritage to protect sites of outstanding universal value. 

• Pursuing scientific cooperation: such as early warning systems for tsunamis or trans-boundary water management agreements, to strengthen ties between nations and societies. 

• Protecting freedom of expression: an essential condition for democracy, development and human dignity. 

Source: http://en.unesco.org/about-us/introducing-unesco 

The UNESCO Institute for Statistics (UIS) is the statistical branch of the United Nations Educational, Scientific and Cultural Organisation (UNESCO). The Institute produces the data and methodologies to monitor trends at national and international levels. It delivers comparative data for countries at all stages of development to provide a global perspective on education, science and technology, culture, and communication. 

Source: http://www.uis.unesco.org/AboutUIS/Pages/default.aspx</com:Description>
					<str:Contact>
						<com:Name xml:lang="en">UNESCO Institute for Statistics (UIS)</com:Name>
						<str:Department xml:lang="en">Requests for information</str:Department>
						<str:Role xml:lang="en">Contact</str:Role>
						<str:URI>www.uis.unesco.org</str:URI>
						<str:Email>uis.datarequests@unesco.org</str:Email>
					</str:Contact>
				</str:Agency>
			</str:AgencyScheme>
		</str:OrganisationSchemes>
		<str:Codelists>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=SDMX:CL_DECIMALS(1.0)" isExternalReference="false" agencyID="SDMX" id="CL_DECIMALS" isFinal="true" version="1.0">
				<com:Name xml:lang="en">Decimals</com:Name>
				<com:Name xml:lang="es">Decimales</com:Name>
				<com:Description xml:lang="en">This code list provides a list of values showing the number of decimal digits used in the data. This code list was first released in 2009. More information about this code list and SDMX code lists in general (e.g. list of generic codes for expressing general concepts like "Total", "Unknown", etc.; syntaxes for the creation of further codes; general guidelines for the creation of SDMX code lists) can be found at this address: http://sdmx.org/?page_id=1513.</com:Description>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).0" id="0">
					<com:Name xml:lang="en">Zero</com:Name>
					<com:Name xml:lang="es">cero</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).1" id="1">
					<com:Name xml:lang="en">One</com:Name>
					<com:Name xml:lang="es">uno</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).2" id="2">
					<com:Name xml:lang="en">Two</com:Name>
					<com:Name xml:lang="es">dos</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).3" id="3">
					<com:Name xml:lang="en">Three</com:Name>
					<com:Name xml:lang="es">tres</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).4" id="4">
					<com:Name xml:lang="en">Four</com:Name>
					<com:Name xml:lang="es">cuatro</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).5" id="5">
					<com:Name xml:lang="en">Five</com:Name>
					<com:Name xml:lang="es">cinco</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).6" id="6">
					<com:Name xml:lang="en">Six</com:Name>
					<com:Name xml:lang="es">seis</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).7" id="7">
					<com:Name xml:lang="en">Seven</com:Name>
					<com:Name xml:lang="es">siete</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).8" id="8">
					<com:Name xml:lang="en">Eight</com:Name>
					<com:Name xml:lang="es">ocho</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).9" id="9">
					<com:Name xml:lang="en">Nine</com:Name>
					<com:Name xml:lang="es">nueve</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).10" id="10">
					<com:Name xml:lang="en">Ten</com:Name>
					<com:Name xml:lang="es">diez</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).11" id="11">
					<com:Name xml:lang="en">Eleven</com:Name>
					<com:Name xml:lang="es">once</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).12" id="12">
					<com:Name xml:lang="en">Twelve</com:Name>
					<com:Name xml:lang="es">doce</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).13" id="13">
					<com:Name xml:lang="en">Thirteen</com:Name>
					<com:Name xml:lang="es">trece</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).14" id="14">
					<com:Name xml:lang="en">Fourteen</com:Name>
					<com:Name xml:lang="es">catorce</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_DECIMALS(1.0).15" id="15">
					<com:Name xml:lang="en">Fifteen</com:Name>
					<com:Name xml:lang="es">quince</com:Name>
				</str:Code>
			</str:Codelist>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=SDMX:CL_FREQ(2.0)" isExternalReference="false" agencyID="SDMX" id="CL_FREQ" isFinal="true" version="2.0">
				<com:Name xml:lang="en">Frequency</com:Name>
				<com:Name xml:lang="es">Frecuencia</com:Name>
				<com:Description xml:lang="en">This code list provides a set of values indicating the "frequency" of the data (e.g. weekly, monthly, quarterly). The concept “frequency” may refer to various stages in the production process, e.g. data collection or data dissemination. For example, a time series could be disseminated at annual frequency but the underlying data are compiled monthly. The code list is applicable for all different uses of "frequency". This code list was formally adopted on 4 December 2013. More information about and supporting material for this code list and SDMX code lists in general (e.g. list of generic codes for expressing general concepts like "Total", "Unknown", etc.; syntaxes for the creation of further codes; general guidelines for the creation of SDMX code lists) can be found at this address: http://sdmx.org/?page_id=1513.</com:Description>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_FREQ(2.0).A" id="A">
					<com:Name xml:lang="en">Annual</com:Name>
					<com:Name xml:lang="es">Anual</com:Name>
					<com:Description xml:lang="en">To be used for data collected or disseminated every year.</com:Description>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_FREQ(2.0).S" id="S">
					<com:Name xml:lang="en">Half-yearly, semester</com:Name>
					<com:Name xml:lang="es">Semestral</com:Name>
					<com:Description xml:lang="en">To be used for data collected or disseminated every semester.</com:Description>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_FREQ(2.0).Q" id="Q">
					<com:Name xml:lang="en">Quarterly</com:Name>
					<com:Name xml:lang="es">Trimestral</com:Name>
					<com:Description xml:lang="en">To be used for data collected or disseminated every quarter.</com:Description>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_FREQ(2.0).M" id="M">
					<com:Name xml:lang="en">Monthly</com:Name>
					<com:Name xml:lang="es">Mensual</com:Name>
					<com:Description xml:lang="en">To be used for data collected or disseminated every month.</com:Description>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_FREQ(2.0).W" id="W">
					<com:Name xml:lang="en">Weekly</com:Name>
					<com:Name xml:lang="es">Semanal</com:Name>
					<com:Description xml:lang="en">To be used for data collected or disseminated every week.</com:Description>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_FREQ(2.0).D" id="D">
					<com:Name xml:lang="en">Daily</com:Name>
					<com:Name xml:lang="es">Diario</com:Name>
					<com:Description xml:lang="en">To be used for data collected or disseminated every day.</com:Description>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_FREQ(2.0).H" id="H">
					<com:Name xml:lang="en">Hourly</com:Name>
					<com:Name xml:lang="es">Cada hora</com:Name>
					<com:Description xml:lang="en">To be used for data collected or disseminated every hour.</com:Description>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_FREQ(2.0).B" id="B">
					<com:Name xml:lang="en">Daily – businessweek</com:Name>
					<com:Name xml:lang="es">Diario - semanal</com:Name>
					<com:Description xml:lang="en">Similar to "daily", however there are no observations for Saturdays and Sundays (so, neither "missing values" nor "numeric values" should be provided for Saturday and Sunday). This treatment  ("business") is one way to deal with such cases, but it is not the only option. Such a time series could alternatively be considered daily ("D"), thus, with missing values in the weekend.</com:Description>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_FREQ(2.0).N" id="N">
					<com:Name xml:lang="en">Minutely</com:Name>
					<com:Name xml:lang="es">Cada minuto</com:Name>
					<com:Description xml:lang="en">While N denotes "minutely", usually, there may be no observations every minute (for several series the frequency is usually "irregular" within a day/days). And though observations may be sparse (not collected or disseminated every minute), missing values do not need to be given for the minutes when no observations exist: in any case the time stamp determines when an observation is observed.</com:Description>
				</str:Code>
			</str:Codelist>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=SDMX:CL_UNIT_MULT(1.0)" isExternalReference="false" agencyID="SDMX" id="CL_UNIT_MULT" isFinal="true" version="1.0">
				<com:Name xml:lang="en">Unit Multiplier</com:Name>
				<com:Name xml:lang="es">Multiplicador de unidades</com:Name>
				<com:Description xml:lang="en">This code list provides code values for indicating the magnitude in the units of measurement. It was first released in 2009. More information about this code list and SDMX code lists in general (e.g. list of generic codes for expressing general concepts like "Total", "Unknown", etc.; syntaxes for the creation of further codes; general guidelines for the creation of SDMX code lists) can be found at this address: http://sdmx.org/?page_id=1513.</com:Description>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_UNIT_MULT(1.0).0" id="0">
					<com:Name xml:lang="en">Units</com:Name>
					<com:Name xml:lang="es">Unidades</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_UNIT_MULT(1.0).1" id="1">
					<com:Name xml:lang="en">Tens</com:Name>
					<com:Name xml:lang="es">Decenas</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_UNIT_MULT(1.0).2" id="2">
					<com:Name xml:lang="en">Hundreds</com:Name>
					<com:Name xml:lang="es">Centenas</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_UNIT_MULT(1.0).3" id="3">
					<com:Name xml:lang="en">Thousands</com:Name>
					<com:Name xml:lang="es">Miles</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_UNIT_MULT(1.0).4" id="4">
					<com:Name xml:lang="en">Tens of thousands</com:Name>
					<com:Name xml:lang="es">Decenas de miles</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_UNIT_MULT(1.0).6" id="6">
					<com:Name xml:lang="en">Millions</com:Name>
					<com:Name xml:lang="es">Millones</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_UNIT_MULT(1.0).9" id="9">
					<com:Name xml:lang="en">Billions</com:Name>
					<com:Name xml:lang="es">Miles de millones</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_UNIT_MULT(1.0).12" id="12">
					<com:Name xml:lang="en">Trillions</com:Name>
					<com:Name xml:lang="es">Billones</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=SDMX:CL_UNIT_MULT(1.0).15" id="15">
					<com:Name xml:lang="en">Quadrillions</com:Name>
					<com:Name xml:lang="es">Miles de billones</com:Name>
				</str:Code>
			</str:Codelist>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=UNESCO:CL_AREA(1.0)" isExternalReference="false" agencyID="UNESCO" id="CL_AREA" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Country / region</com:Name>
				<com:Name xml:lang="es">País / región</com:Name>
				<com:Name xml:lang="fr">Pays / région</com:Name>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AD" id="AD">
					<com:Name xml:lang="en">Andorra</com:Name>
					<com:Name xml:lang="es">Andorra</com:Name>
					<com:Name xml:lang="fr">Andorre</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AE" id="AE">
					<com:Name xml:lang="en">United Arab Emirates</com:Name>
					<com:Name xml:lang="es">Emiratos Árabes Unidos (los)</com:Name>
					<com:Name xml:lang="fr">Émirats arabes unis</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AF" id="AF">
					<com:Name xml:lang="en">Afghanistan</com:Name>
					<com:Name xml:lang="es">Afganistán</com:Name>
					<com:Name xml:lang="fr">Afghanistan</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AG" id="AG">
					<com:Name xml:lang="en">Antigua and Barbuda</com:Name>
					<com:Name xml:lang="es">Antigua y Barbuda</com:Name>
					<com:Name xml:lang="fr">Antigua-et-Barbuda</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AI" id="AI">
					<com:Name xml:lang="en">Anguilla</com:Name>
					<com:Name xml:lang="es">Anguila</com:Name>
					<com:Name xml:lang="fr">Anguilla</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AL" id="AL">
					<com:Name xml:lang="en">Albania</com:Name>
					<com:Name xml:lang="es">Albania</com:Name>
					<com:Name xml:lang="fr">Albanie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AM" id="AM">
					<com:Name xml:lang="en">Armenia</com:Name>
					<com:Name xml:lang="es">Armenia</com:Name>
					<com:Name xml:lang="fr">Arménie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AO" id="AO">
					<com:Name xml:lang="en">Angola</com:Name>
					<com:Name xml:lang="es">Angola</com:Name>
					<com:Name xml:lang="fr">Angola</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AR" id="AR">
					<com:Name xml:lang="en">Argentina</com:Name>
					<com:Name xml:lang="es">Argentina</com:Name>
					<com:Name xml:lang="fr">Argentine</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AT" id="AT">
					<com:Name xml:lang="en">Austria</com:Name>
					<com:Name xml:lang="es">Austria</com:Name>
					<com:Name xml:lang="fr">Autriche</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AU" id="AU">
					<com:Name xml:lang="en">Australia</com:Name>
					<com:Name xml:lang="es">Australia</com:Name>
					<com:Name xml:lang="fr">Australie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AW" id="AW">
					<com:Name xml:lang="en">Aruba</com:Name>
					<com:Name xml:lang="es">Aruba</com:Name>
					<com:Name xml:lang="fr">Aruba</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AZ" id="AZ">
					<com:Name xml:lang="en">Azerbaijan</com:Name>
					<com:Name xml:lang="es">Azerbaiyán</com:Name>
					<com:Name xml:lang="fr">Azerbaïdjan</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BA" id="BA">
					<com:Name xml:lang="en">Bosnia and Herzegovina</com:Name>
					<com:Name xml:lang="es">Bosnia y Herzegovina</com:Name>
					<com:Name xml:lang="fr">Bosnie-Herzégovine</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BB" id="BB">
					<com:Name xml:lang="en">Barbados</com:Name>
					<com:Name xml:lang="es">Barbados</com:Name>
					<com:Name xml:lang="fr">Barbade</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BD" id="BD">
					<com:Name xml:lang="en">Bangladesh</com:Name>
					<com:Name xml:lang="es">Bangladesh</com:Name>
					<com:Name xml:lang="fr">Bangladesh</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BE" id="BE">
					<com:Name xml:lang="en">Belgium</com:Name>
					<com:Name xml:lang="es">Bélgica</com:Name>
					<com:Name xml:lang="fr">Belgique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BF" id="BF">
					<com:Name xml:lang="en">Burkina Faso</com:Name>
					<com:Name xml:lang="es">Burkina Faso</com:Name>
					<com:Name xml:lang="fr">Burkina Faso</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BG" id="BG">
					<com:Name xml:lang="en">Bulgaria</com:Name>
					<com:Name xml:lang="es">Bulgaria</com:Name>
					<com:Name xml:lang="fr">Bulgarie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BH" id="BH">
					<com:Name xml:lang="en">Bahrain</com:Name>
					<com:Name xml:lang="es">Bahrein</com:Name>
					<com:Name xml:lang="fr">Bahreïn</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BI" id="BI">
					<com:Name xml:lang="en">Burundi</com:Name>
					<com:Name xml:lang="es">Burundi</com:Name>
					<com:Name xml:lang="fr">Burundi</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BJ" id="BJ">
					<com:Name xml:lang="en">Benin</com:Name>
					<com:Name xml:lang="es">Benin</com:Name>
					<com:Name xml:lang="fr">Bénin</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BM" id="BM">
					<com:Name xml:lang="en">Bermuda</com:Name>
					<com:Name xml:lang="es">Bermuda</com:Name>
					<com:Name xml:lang="fr">Bermudes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BN" id="BN">
					<com:Name xml:lang="en">Brunei Darussalam</com:Name>
					<com:Name xml:lang="es">Brunei Darussalam</com:Name>
					<com:Name xml:lang="fr">Brunéi Darussalam</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BO" id="BO">
					<com:Name xml:lang="en">Bolivia (Plurinational State of)</com:Name>
					<com:Name xml:lang="es">Bolivia (Estado Plurinacional de)</com:Name>
					<com:Name xml:lang="fr">Bolivie (État plurinational de)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BR" id="BR">
					<com:Name xml:lang="en">Brazil</com:Name>
					<com:Name xml:lang="es">Brasil</com:Name>
					<com:Name xml:lang="fr">Brésil</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BS" id="BS">
					<com:Name xml:lang="en">Bahamas</com:Name>
					<com:Name xml:lang="es">Bahamas</com:Name>
					<com:Name xml:lang="fr">Bahamas</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BT" id="BT">
					<com:Name xml:lang="en">Bhutan</com:Name>
					<com:Name xml:lang="es">Bhután</com:Name>
					<com:Name xml:lang="fr">Bhoutan</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BW" id="BW">
					<com:Name xml:lang="en">Botswana</com:Name>
					<com:Name xml:lang="es">Botswana</com:Name>
					<com:Name xml:lang="fr">Botswana</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BY" id="BY">
					<com:Name xml:lang="en">Belarus</com:Name>
					<com:Name xml:lang="es">Belarús</com:Name>
					<com:Name xml:lang="fr">Bélarus</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BZ" id="BZ">
					<com:Name xml:lang="en">Belize</com:Name>
					<com:Name xml:lang="es">Belice</com:Name>
					<com:Name xml:lang="fr">Belize</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CA" id="CA">
					<com:Name xml:lang="en">Canada</com:Name>
					<com:Name xml:lang="es">Canadá</com:Name>
					<com:Name xml:lang="fr">Canada</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CD" id="CD">
					<com:Name xml:lang="en">Democratic Republic of the Congo</com:Name>
					<com:Name xml:lang="es">República Democrática del Congo</com:Name>
					<com:Name xml:lang="fr">République démocratique du Congo</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CF" id="CF">
					<com:Name xml:lang="en">Central African Republic</com:Name>
					<com:Name xml:lang="es">República Centroafricana</com:Name>
					<com:Name xml:lang="fr">République centrafricaine</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CG" id="CG">
					<com:Name xml:lang="en">Congo</com:Name>
					<com:Name xml:lang="es">Congo</com:Name>
					<com:Name xml:lang="fr">Congo</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CH" id="CH">
					<com:Name xml:lang="en">Switzerland</com:Name>
					<com:Name xml:lang="es">Suiza</com:Name>
					<com:Name xml:lang="fr">Suisse</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CI" id="CI">
					<com:Name xml:lang="en">Côte d'Ivoire</com:Name>
					<com:Name xml:lang="es">Côte d'Ivoire</com:Name>
					<com:Name xml:lang="fr">Côte d'Ivoire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CK" id="CK">
					<com:Name xml:lang="en">Cook Islands</com:Name>
					<com:Name xml:lang="es">Islas Cook</com:Name>
					<com:Name xml:lang="fr">Îles Cook</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CL" id="CL">
					<com:Name xml:lang="en">Chile</com:Name>
					<com:Name xml:lang="es">Chile</com:Name>
					<com:Name xml:lang="fr">Chili</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CM" id="CM">
					<com:Name xml:lang="en">Cameroon</com:Name>
					<com:Name xml:lang="es">Camerún</com:Name>
					<com:Name xml:lang="fr">Cameroun</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CN" id="CN">
					<com:Name xml:lang="en">China</com:Name>
					<com:Name xml:lang="es">China</com:Name>
					<com:Name xml:lang="fr">Chine</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CO" id="CO">
					<com:Name xml:lang="en">Colombia</com:Name>
					<com:Name xml:lang="es">Colombia</com:Name>
					<com:Name xml:lang="fr">Colombie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CR" id="CR">
					<com:Name xml:lang="en">Costa Rica</com:Name>
					<com:Name xml:lang="es">Costa Rica</com:Name>
					<com:Name xml:lang="fr">Costa Rica</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CU" id="CU">
					<com:Name xml:lang="en">Cuba</com:Name>
					<com:Name xml:lang="es">Cuba</com:Name>
					<com:Name xml:lang="fr">Cuba</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CV" id="CV">
					<com:Name xml:lang="en">Cabo Verde</com:Name>
					<com:Name xml:lang="es">Cabo Verde</com:Name>
					<com:Name xml:lang="fr">Cabo Verde</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CW" id="CW">
					<com:Name xml:lang="en">Curaçao</com:Name>
					<com:Name xml:lang="es">Curazao</com:Name>
					<com:Name xml:lang="fr">Curaçao</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CY" id="CY">
					<com:Name xml:lang="en">Cyprus</com:Name>
					<com:Name xml:lang="es">Chipre</com:Name>
					<com:Name xml:lang="fr">Chypre</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CZ" id="CZ">
					<com:Name xml:lang="en">Czechia</com:Name>
					<com:Name xml:lang="es">Chequia</com:Name>
					<com:Name xml:lang="fr">Tchéquie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).DE" id="DE">
					<com:Name xml:lang="en">Germany</com:Name>
					<com:Name xml:lang="es">Alemania</com:Name>
					<com:Name xml:lang="fr">Allemagne</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).DJ" id="DJ">
					<com:Name xml:lang="en">Djibouti</com:Name>
					<com:Name xml:lang="es">Djibouti</com:Name>
					<com:Name xml:lang="fr">Djibouti</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).DK" id="DK">
					<com:Name xml:lang="en">Denmark</com:Name>
					<com:Name xml:lang="es">Dinamarca</com:Name>
					<com:Name xml:lang="fr">Danemark</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).DM" id="DM">
					<com:Name xml:lang="en">Dominica</com:Name>
					<com:Name xml:lang="es">Dominica</com:Name>
					<com:Name xml:lang="fr">Dominique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).DO" id="DO">
					<com:Name xml:lang="en">Dominican Republic</com:Name>
					<com:Name xml:lang="es">República Dominicana</com:Name>
					<com:Name xml:lang="fr">République dominicaine</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).DZ" id="DZ">
					<com:Name xml:lang="en">Algeria</com:Name>
					<com:Name xml:lang="es">Argelia</com:Name>
					<com:Name xml:lang="fr">Algérie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).EC" id="EC">
					<com:Name xml:lang="en">Ecuador</com:Name>
					<com:Name xml:lang="es">Ecuador (el)</com:Name>
					<com:Name xml:lang="fr">Équateur</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).EE" id="EE">
					<com:Name xml:lang="en">Estonia</com:Name>
					<com:Name xml:lang="es">Estonia</com:Name>
					<com:Name xml:lang="fr">Estonie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).EG" id="EG">
					<com:Name xml:lang="en">Egypt</com:Name>
					<com:Name xml:lang="es">Egipto</com:Name>
					<com:Name xml:lang="fr">Égypte</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).ER" id="ER">
					<com:Name xml:lang="en">Eritrea</com:Name>
					<com:Name xml:lang="es">Eritrea</com:Name>
					<com:Name xml:lang="fr">Érythrée</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).ES" id="ES">
					<com:Name xml:lang="en">Spain</com:Name>
					<com:Name xml:lang="es">España</com:Name>
					<com:Name xml:lang="fr">Espagne</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).ET" id="ET">
					<com:Name xml:lang="en">Ethiopia</com:Name>
					<com:Name xml:lang="es">Etiopía</com:Name>
					<com:Name xml:lang="fr">Éthiopie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).FI" id="FI">
					<com:Name xml:lang="en">Finland</com:Name>
					<com:Name xml:lang="es">Finlandia</com:Name>
					<com:Name xml:lang="fr">Finlande</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).FJ" id="FJ">
					<com:Name xml:lang="en">Fiji</com:Name>
					<com:Name xml:lang="es">Fiji</com:Name>
					<com:Name xml:lang="fr">Fidji</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).FM" id="FM">
					<com:Name xml:lang="en">Micronesia (Federated States of)</com:Name>
					<com:Name xml:lang="es">Micronesia (Estados Federados de)</com:Name>
					<com:Name xml:lang="fr">Micronésie (États fédérés de)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).FR" id="FR">
					<com:Name xml:lang="en">France</com:Name>
					<com:Name xml:lang="es">Francia</com:Name>
					<com:Name xml:lang="fr">France</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GA" id="GA">
					<com:Name xml:lang="en">Gabon</com:Name>
					<com:Name xml:lang="es">Gabón</com:Name>
					<com:Name xml:lang="fr">Gabon</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GB" id="GB">
					<com:Name xml:lang="en">United Kingdom of Great Britain and Northern Ireland</com:Name>
					<com:Name xml:lang="es">Reino Unido de Gran Bretaña e Irlanda del Norte</com:Name>
					<com:Name xml:lang="fr">Royaume-Uni de Grande-Bretagne et d'Irlande du Nord</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GD" id="GD">
					<com:Name xml:lang="en">Grenada</com:Name>
					<com:Name xml:lang="es">Granada</com:Name>
					<com:Name xml:lang="fr">Grenade</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GE" id="GE">
					<com:Name xml:lang="en">Georgia</com:Name>
					<com:Name xml:lang="es">Georgia</com:Name>
					<com:Name xml:lang="fr">Géorgie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GH" id="GH">
					<com:Name xml:lang="en">Ghana</com:Name>
					<com:Name xml:lang="es">Ghana</com:Name>
					<com:Name xml:lang="fr">Ghana</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GL" id="GL">
					<com:Name xml:lang="en">Greenland</com:Name>
					<com:Name xml:lang="es">Groenlandia</com:Name>
					<com:Name xml:lang="fr">Groënland</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GM" id="GM">
					<com:Name xml:lang="en">Gambia</com:Name>
					<com:Name xml:lang="es">Gambia</com:Name>
					<com:Name xml:lang="fr">Gambie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GN" id="GN">
					<com:Name xml:lang="en">Guinea</com:Name>
					<com:Name xml:lang="es">Guinea</com:Name>
					<com:Name xml:lang="fr">Guinée</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GQ" id="GQ">
					<com:Name xml:lang="en">Equatorial Guinea</com:Name>
					<com:Name xml:lang="es">Guinea Ecuatorial</com:Name>
					<com:Name xml:lang="fr">Guinée équatoriale</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GR" id="GR">
					<com:Name xml:lang="en">Greece</com:Name>
					<com:Name xml:lang="es">Grecia</com:Name>
					<com:Name xml:lang="fr">Grèce</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GT" id="GT">
					<com:Name xml:lang="en">Guatemala</com:Name>
					<com:Name xml:lang="es">Guatemala</com:Name>
					<com:Name xml:lang="fr">Guatemala</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GW" id="GW">
					<com:Name xml:lang="en">Guinea-Bissau</com:Name>
					<com:Name xml:lang="es">Guinea-Bissau</com:Name>
					<com:Name xml:lang="fr">Guinée-Bissau</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GY" id="GY">
					<com:Name xml:lang="en">Guyana</com:Name>
					<com:Name xml:lang="es">Guyana</com:Name>
					<com:Name xml:lang="fr">Guyana</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).HK" id="HK">
					<com:Name xml:lang="en">China, Hong Kong Special Administrative Region</com:Name>
					<com:Name xml:lang="es">China, Región Administrativa Especial de Hong Kong</com:Name>
					<com:Name xml:lang="fr">Chine, région administrative spéciale de Hong Kong</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).HN" id="HN">
					<com:Name xml:lang="en">Honduras</com:Name>
					<com:Name xml:lang="es">Honduras</com:Name>
					<com:Name xml:lang="fr">Honduras</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).HR" id="HR">
					<com:Name xml:lang="en">Croatia</com:Name>
					<com:Name xml:lang="es">Croacia</com:Name>
					<com:Name xml:lang="fr">Croatie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).HT" id="HT">
					<com:Name xml:lang="en">Haiti</com:Name>
					<com:Name xml:lang="es">Haití</com:Name>
					<com:Name xml:lang="fr">Haïti</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).HU" id="HU">
					<com:Name xml:lang="en">Hungary</com:Name>
					<com:Name xml:lang="es">Hungría</com:Name>
					<com:Name xml:lang="fr">Hongrie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).ID" id="ID">
					<com:Name xml:lang="en">Indonesia</com:Name>
					<com:Name xml:lang="es">Indonesia</com:Name>
					<com:Name xml:lang="fr">Indonésie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).IE" id="IE">
					<com:Name xml:lang="en">Ireland</com:Name>
					<com:Name xml:lang="es">Irlanda</com:Name>
					<com:Name xml:lang="fr">Irlande</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).IL" id="IL">
					<com:Name xml:lang="en">Israel</com:Name>
					<com:Name xml:lang="es">Israel</com:Name>
					<com:Name xml:lang="fr">Israël</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).IN" id="IN">
					<com:Name xml:lang="en">India</com:Name>
					<com:Name xml:lang="es">India</com:Name>
					<com:Name xml:lang="fr">Inde</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).IQ" id="IQ">
					<com:Name xml:lang="en">Iraq</com:Name>
					<com:Name xml:lang="es">Iraq (el)</com:Name>
					<com:Name xml:lang="fr">Iraq</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).IR" id="IR">
					<com:Name xml:lang="en">Iran (Islamic Republic of)</com:Name>
					<com:Name xml:lang="es">Irán (República Islámica del)</com:Name>
					<com:Name xml:lang="fr">Iran (République islamique d')</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).IS" id="IS">
					<com:Name xml:lang="en">Iceland</com:Name>
					<com:Name xml:lang="es">Islandia</com:Name>
					<com:Name xml:lang="fr">Islande</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).IT" id="IT">
					<com:Name xml:lang="en">Italy</com:Name>
					<com:Name xml:lang="es">Italia</com:Name>
					<com:Name xml:lang="fr">Italie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).JM" id="JM">
					<com:Name xml:lang="en">Jamaica</com:Name>
					<com:Name xml:lang="es">Jamaica</com:Name>
					<com:Name xml:lang="fr">Jamaïque</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).JO" id="JO">
					<com:Name xml:lang="en">Jordan</com:Name>
					<com:Name xml:lang="es">Jordania</com:Name>
					<com:Name xml:lang="fr">Jordanie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).JP" id="JP">
					<com:Name xml:lang="en">Japan</com:Name>
					<com:Name xml:lang="es">Japón</com:Name>
					<com:Name xml:lang="fr">Japon</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KE" id="KE">
					<com:Name xml:lang="en">Kenya</com:Name>
					<com:Name xml:lang="es">Kenya</com:Name>
					<com:Name xml:lang="fr">Kenya</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KG" id="KG">
					<com:Name xml:lang="en">Kyrgyzstan</com:Name>
					<com:Name xml:lang="es">Kirguistán</com:Name>
					<com:Name xml:lang="fr">Kirghizistan</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KH" id="KH">
					<com:Name xml:lang="en">Cambodia</com:Name>
					<com:Name xml:lang="es">Camboya</com:Name>
					<com:Name xml:lang="fr">Cambodge</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KI" id="KI">
					<com:Name xml:lang="en">Kiribati</com:Name>
					<com:Name xml:lang="es">Kiribati</com:Name>
					<com:Name xml:lang="fr">Kiribati</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KM" id="KM">
					<com:Name xml:lang="en">Comoros</com:Name>
					<com:Name xml:lang="es">Comoras</com:Name>
					<com:Name xml:lang="fr">Comores</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KN" id="KN">
					<com:Name xml:lang="en">Saint Kitts and Nevis</com:Name>
					<com:Name xml:lang="es">Saint Kitts y Nevis</com:Name>
					<com:Name xml:lang="fr">Saint-Kitts-et-Nevis</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KP" id="KP">
					<com:Name xml:lang="en">Democratic People's Republic of Korea</com:Name>
					<com:Name xml:lang="es">República Popular Democrática de Corea</com:Name>
					<com:Name xml:lang="fr">République populaire démocratique de Corée</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KR" id="KR">
					<com:Name xml:lang="en">Republic of Korea</com:Name>
					<com:Name xml:lang="es">República de Corea</com:Name>
					<com:Name xml:lang="fr">République de Corée</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KW" id="KW">
					<com:Name xml:lang="en">Kuwait</com:Name>
					<com:Name xml:lang="es">Kuwait</com:Name>
					<com:Name xml:lang="fr">Koweït</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KY" id="KY">
					<com:Name xml:lang="en">Cayman Islands</com:Name>
					<com:Name xml:lang="es">Islas Caimán</com:Name>
					<com:Name xml:lang="fr">Iles Caïmanes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).KZ" id="KZ">
					<com:Name xml:lang="en">Kazakhstan</com:Name>
					<com:Name xml:lang="es">Kazajstán</com:Name>
					<com:Name xml:lang="fr">Kazakhstan</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LA" id="LA">
					<com:Name xml:lang="en">Lao People's Democratic Republic</com:Name>
					<com:Name xml:lang="es">República Democrática Popular Lao</com:Name>
					<com:Name xml:lang="fr">République démocratique populaire lao</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LB" id="LB">
					<com:Name xml:lang="en">Lebanon</com:Name>
					<com:Name xml:lang="es">Líbano</com:Name>
					<com:Name xml:lang="fr">Liban</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LC" id="LC">
					<com:Name xml:lang="en">Saint Lucia</com:Name>
					<com:Name xml:lang="es">Santa Lucía</com:Name>
					<com:Name xml:lang="fr">Sainte-Lucie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LI" id="LI">
					<com:Name xml:lang="en">Liechtenstein</com:Name>
					<com:Name xml:lang="es">Liechtenstein</com:Name>
					<com:Name xml:lang="fr">Liechtenstein</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LK" id="LK">
					<com:Name xml:lang="en">Sri Lanka</com:Name>
					<com:Name xml:lang="es">Sri Lanka</com:Name>
					<com:Name xml:lang="fr">Sri Lanka</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LR" id="LR">
					<com:Name xml:lang="en">Liberia</com:Name>
					<com:Name xml:lang="es">Liberia</com:Name>
					<com:Name xml:lang="fr">Libéria</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LS" id="LS">
					<com:Name xml:lang="en">Lesotho</com:Name>
					<com:Name xml:lang="es">Lesotho</com:Name>
					<com:Name xml:lang="fr">Lesotho</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LT" id="LT">
					<com:Name xml:lang="en">Lithuania</com:Name>
					<com:Name xml:lang="es">Lituania</com:Name>
					<com:Name xml:lang="fr">Lituanie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LU" id="LU">
					<com:Name xml:lang="en">Luxembourg</com:Name>
					<com:Name xml:lang="es">Luxemburgo</com:Name>
					<com:Name xml:lang="fr">Luxembourg</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LV" id="LV">
					<com:Name xml:lang="en">Latvia</com:Name>
					<com:Name xml:lang="es">Letonia</com:Name>
					<com:Name xml:lang="fr">Lettonie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).LY" id="LY">
					<com:Name xml:lang="en">Libya</com:Name>
					<com:Name xml:lang="es">Libia</com:Name>
					<com:Name xml:lang="fr">Libye</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MA" id="MA">
					<com:Name xml:lang="en">Morocco</com:Name>
					<com:Name xml:lang="es">Marruecos</com:Name>
					<com:Name xml:lang="fr">Maroc</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MC" id="MC">
					<com:Name xml:lang="en">Monaco</com:Name>
					<com:Name xml:lang="es">Mónaco</com:Name>
					<com:Name xml:lang="fr">Monaco</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MD" id="MD">
					<com:Name xml:lang="en">Republic of Moldova</com:Name>
					<com:Name xml:lang="es">la República de Moldova</com:Name>
					<com:Name xml:lang="fr">République de Moldova</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).ME" id="ME">
					<com:Name xml:lang="en">Montenegro</com:Name>
					<com:Name xml:lang="es">Montenegro</com:Name>
					<com:Name xml:lang="fr">Monténégro</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MG" id="MG">
					<com:Name xml:lang="en">Madagascar</com:Name>
					<com:Name xml:lang="es">Madagascar</com:Name>
					<com:Name xml:lang="fr">Madagascar</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MH" id="MH">
					<com:Name xml:lang="en">Marshall Islands</com:Name>
					<com:Name xml:lang="es">Islas Marshall</com:Name>
					<com:Name xml:lang="fr">Îles Marshall</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MK" id="MK">
					<com:Name xml:lang="en">The former Yugoslav Republic of Macedonia</com:Name>
					<com:Name xml:lang="es">la ex República Yugoslava de Macedonia</com:Name>
					<com:Name xml:lang="fr">Ex-République yougoslave de Macédoine</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).ML" id="ML">
					<com:Name xml:lang="en">Mali</com:Name>
					<com:Name xml:lang="es">Malí</com:Name>
					<com:Name xml:lang="fr">Mali</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MM" id="MM">
					<com:Name xml:lang="en">Myanmar</com:Name>
					<com:Name xml:lang="es">Myanmar</com:Name>
					<com:Name xml:lang="fr">Myanmar</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MN" id="MN">
					<com:Name xml:lang="en">Mongolia</com:Name>
					<com:Name xml:lang="es">Mongolia</com:Name>
					<com:Name xml:lang="fr">Mongolie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MO" id="MO">
					<com:Name xml:lang="en">China, Macao Special Administrative Region</com:Name>
					<com:Name xml:lang="es">China, Región Administrativa Especial de Macao</com:Name>
					<com:Name xml:lang="fr">Chine, région administrative spéciale de Macao</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MR" id="MR">
					<com:Name xml:lang="en">Mauritania</com:Name>
					<com:Name xml:lang="es">Mauritania</com:Name>
					<com:Name xml:lang="fr">Mauritanie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MS" id="MS">
					<com:Name xml:lang="en">Montserrat</com:Name>
					<com:Name xml:lang="es">Montserrat</com:Name>
					<com:Name xml:lang="fr">Montserrat</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MT" id="MT">
					<com:Name xml:lang="en">Malta</com:Name>
					<com:Name xml:lang="es">Malta</com:Name>
					<com:Name xml:lang="fr">Malte</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MU" id="MU">
					<com:Name xml:lang="en">Mauritius</com:Name>
					<com:Name xml:lang="es">Mauricio</com:Name>
					<com:Name xml:lang="fr">Maurice</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MV" id="MV">
					<com:Name xml:lang="en">Maldives</com:Name>
					<com:Name xml:lang="es">Maldivas</com:Name>
					<com:Name xml:lang="fr">Maldives</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MW" id="MW">
					<com:Name xml:lang="en">Malawi</com:Name>
					<com:Name xml:lang="es">Malawi</com:Name>
					<com:Name xml:lang="fr">Malawi</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MX" id="MX">
					<com:Name xml:lang="en">Mexico</com:Name>
					<com:Name xml:lang="es">México</com:Name>
					<com:Name xml:lang="fr">Mexique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MY" id="MY">
					<com:Name xml:lang="en">Malaysia</com:Name>
					<com:Name xml:lang="es">Malasia</com:Name>
					<com:Name xml:lang="fr">Malaisie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MZ" id="MZ">
					<com:Name xml:lang="en">Mozambique</com:Name>
					<com:Name xml:lang="es">Mozambique</com:Name>
					<com:Name xml:lang="fr">Mozambique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NA" id="NA">
					<com:Name xml:lang="en">Namibia</com:Name>
					<com:Name xml:lang="es">Namibia</com:Name>
					<com:Name xml:lang="fr">Namibie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NE" id="NE">
					<com:Name xml:lang="en">Niger</com:Name>
					<com:Name xml:lang="es">Níger</com:Name>
					<com:Name xml:lang="fr">Niger</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NG" id="NG">
					<com:Name xml:lang="en">Nigeria</com:Name>
					<com:Name xml:lang="es">Nigeria</com:Name>
					<com:Name xml:lang="fr">Nigéria</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NI" id="NI">
					<com:Name xml:lang="en">Nicaragua</com:Name>
					<com:Name xml:lang="es">Nicaragua</com:Name>
					<com:Name xml:lang="fr">Nicaragua</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NL" id="NL">
					<com:Name xml:lang="en">Netherlands</com:Name>
					<com:Name xml:lang="es">Países Bajos</com:Name>
					<com:Name xml:lang="fr">Pays-Bas</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NO" id="NO">
					<com:Name xml:lang="en">Norway</com:Name>
					<com:Name xml:lang="es">Noruega</com:Name>
					<com:Name xml:lang="fr">Norvège</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NP" id="NP">
					<com:Name xml:lang="en">Nepal</com:Name>
					<com:Name xml:lang="es">Nepal</com:Name>
					<com:Name xml:lang="fr">Népal</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NR" id="NR">
					<com:Name xml:lang="en">Nauru</com:Name>
					<com:Name xml:lang="es">Nauru</com:Name>
					<com:Name xml:lang="fr">Nauru</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NU" id="NU">
					<com:Name xml:lang="en">Niue</com:Name>
					<com:Name xml:lang="es">Niue</com:Name>
					<com:Name xml:lang="fr">Nioué</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NZ" id="NZ">
					<com:Name xml:lang="en">New Zealand</com:Name>
					<com:Name xml:lang="es">Nueva Zelandia</com:Name>
					<com:Name xml:lang="fr">Nouvelle-Zélande</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).OM" id="OM">
					<com:Name xml:lang="en">Oman</com:Name>
					<com:Name xml:lang="es">Omán</com:Name>
					<com:Name xml:lang="fr">Oman</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PA" id="PA">
					<com:Name xml:lang="en">Panama</com:Name>
					<com:Name xml:lang="es">Panamá</com:Name>
					<com:Name xml:lang="fr">Panama</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PE" id="PE">
					<com:Name xml:lang="en">Peru</com:Name>
					<com:Name xml:lang="es">Perú</com:Name>
					<com:Name xml:lang="fr">Pérou</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PG" id="PG">
					<com:Name xml:lang="en">Papua New Guinea</com:Name>
					<com:Name xml:lang="es">Papua Nueva Guinea</com:Name>
					<com:Name xml:lang="fr">Papouasie-Nouvelle-Guinée</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PH" id="PH">
					<com:Name xml:lang="en">Philippines</com:Name>
					<com:Name xml:lang="es">Filipinas</com:Name>
					<com:Name xml:lang="fr">Philippines</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PK" id="PK">
					<com:Name xml:lang="en">Pakistan</com:Name>
					<com:Name xml:lang="es">Pakistán</com:Name>
					<com:Name xml:lang="fr">Pakistan</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PL" id="PL">
					<com:Name xml:lang="en">Poland</com:Name>
					<com:Name xml:lang="es">Polonia</com:Name>
					<com:Name xml:lang="fr">Pologne</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PR" id="PR">
					<com:Name xml:lang="en">Puerto Rico</com:Name>
					<com:Name xml:lang="es">Puerto Rico</com:Name>
					<com:Name xml:lang="fr">Porto Rico</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PS" id="PS">
					<com:Name xml:lang="en">Palestine</com:Name>
					<com:Name xml:lang="es">Palestine</com:Name>
					<com:Name xml:lang="fr">Palestine</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PT" id="PT">
					<com:Name xml:lang="en">Portugal</com:Name>
					<com:Name xml:lang="es">Portugal</com:Name>
					<com:Name xml:lang="fr">Portugal</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PW" id="PW">
					<com:Name xml:lang="en">Palau</com:Name>
					<com:Name xml:lang="es">Palau</com:Name>
					<com:Name xml:lang="fr">Palaos</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PY" id="PY">
					<com:Name xml:lang="en">Paraguay</com:Name>
					<com:Name xml:lang="es">Paraguay</com:Name>
					<com:Name xml:lang="fr">Paraguay</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).QA" id="QA">
					<com:Name xml:lang="en">Qatar</com:Name>
					<com:Name xml:lang="es">Qatar</com:Name>
					<com:Name xml:lang="fr">Qatar</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).RO" id="RO">
					<com:Name xml:lang="en">Romania</com:Name>
					<com:Name xml:lang="es">Rumania</com:Name>
					<com:Name xml:lang="fr">Roumanie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).RS" id="RS">
					<com:Name xml:lang="en">Serbia</com:Name>
					<com:Name xml:lang="es">Serbia</com:Name>
					<com:Name xml:lang="fr">Serbie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).RU" id="RU">
					<com:Name xml:lang="en">Russian Federation</com:Name>
					<com:Name xml:lang="es">Federación de Rusia</com:Name>
					<com:Name xml:lang="fr">Fédération de Russie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).RW" id="RW">
					<com:Name xml:lang="en">Rwanda</com:Name>
					<com:Name xml:lang="es">Rwanda</com:Name>
					<com:Name xml:lang="fr">Rwanda</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SA" id="SA">
					<com:Name xml:lang="en">Saudi Arabia</com:Name>
					<com:Name xml:lang="es">Arabia Saudita</com:Name>
					<com:Name xml:lang="fr">Arabie saoudite</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SB" id="SB">
					<com:Name xml:lang="en">Solomon Islands</com:Name>
					<com:Name xml:lang="es">Islas Salomón</com:Name>
					<com:Name xml:lang="fr">Îles Salomon</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SC" id="SC">
					<com:Name xml:lang="en">Seychelles</com:Name>
					<com:Name xml:lang="es">Seychelles</com:Name>
					<com:Name xml:lang="fr">Seychelles</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SD" id="SD">
					<com:Name xml:lang="en">Sudan</com:Name>
					<com:Name xml:lang="es">Sudán</com:Name>
					<com:Name xml:lang="fr">Soudan</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SE" id="SE">
					<com:Name xml:lang="en">Sweden</com:Name>
					<com:Name xml:lang="es">Suecia</com:Name>
					<com:Name xml:lang="fr">Suède</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SG" id="SG">
					<com:Name xml:lang="en">Singapore</com:Name>
					<com:Name xml:lang="es">Singapur</com:Name>
					<com:Name xml:lang="fr">Singapour</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SI" id="SI">
					<com:Name xml:lang="en">Slovenia</com:Name>
					<com:Name xml:lang="es">Eslovenia</com:Name>
					<com:Name xml:lang="fr">Slovénie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SK" id="SK">
					<com:Name xml:lang="en">Slovakia</com:Name>
					<com:Name xml:lang="es">Eslovaquia</com:Name>
					<com:Name xml:lang="fr">Slovaquie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SL" id="SL">
					<com:Name xml:lang="en">Sierra Leone</com:Name>
					<com:Name xml:lang="es">Sierra Leona</com:Name>
					<com:Name xml:lang="fr">Sierra Leone</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SM" id="SM">
					<com:Name xml:lang="en">San Marino</com:Name>
					<com:Name xml:lang="es">San Marino</com:Name>
					<com:Name xml:lang="fr">Saint-Marin</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SN" id="SN">
					<com:Name xml:lang="en">Senegal</com:Name>
					<com:Name xml:lang="es">Senegal</com:Name>
					<com:Name xml:lang="fr">Sénégal</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SO" id="SO">
					<com:Name xml:lang="en">Somalia</com:Name>
					<com:Name xml:lang="es">Somalia</com:Name>
					<com:Name xml:lang="fr">Somalie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SR" id="SR">
					<com:Name xml:lang="en">Suriname</com:Name>
					<com:Name xml:lang="es">Suriname</com:Name>
					<com:Name xml:lang="fr">Suriname</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SS" id="SS">
					<com:Name xml:lang="en">South Sudan</com:Name>
					<com:Name xml:lang="es">Sudán del Sur</com:Name>
					<com:Name xml:lang="fr">Soudan du Sud</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).ST" id="ST">
					<com:Name xml:lang="en">Sao Tome and Principe</com:Name>
					<com:Name xml:lang="es">Santo Tomé y Príncipe</com:Name>
					<com:Name xml:lang="fr">Sao Tomé-et-Principe</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SV" id="SV">
					<com:Name xml:lang="en">El Salvador</com:Name>
					<com:Name xml:lang="es">El Salvador</com:Name>
					<com:Name xml:lang="fr">El Salvador</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SX" id="SX">
					<com:Name xml:lang="en">Sint Maarten (Dutch part)</com:Name>
					<com:Name xml:lang="es">Sint Maarten (parte holandesa)</com:Name>
					<com:Name xml:lang="fr">Saint-Martin (partie néerlandaise)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SY" id="SY">
					<com:Name xml:lang="en">Syrian Arab Republic</com:Name>
					<com:Name xml:lang="es">República Árabe Siria</com:Name>
					<com:Name xml:lang="fr">République arabe syrienne</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SZ" id="SZ">
					<com:Name xml:lang="en">Swaziland</com:Name>
					<com:Name xml:lang="es">Swazilandia</com:Name>
					<com:Name xml:lang="fr">Swaziland</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TC" id="TC">
					<com:Name xml:lang="en">Turks and Caicos Islands</com:Name>
					<com:Name xml:lang="es">Islas Turcos y Caicos</com:Name>
					<com:Name xml:lang="fr">Iles Turques et Caïques</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TD" id="TD">
					<com:Name xml:lang="en">Chad</com:Name>
					<com:Name xml:lang="es">Chad</com:Name>
					<com:Name xml:lang="fr">Tchad</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TG" id="TG">
					<com:Name xml:lang="en">Togo</com:Name>
					<com:Name xml:lang="es">Togo</com:Name>
					<com:Name xml:lang="fr">Togo</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TH" id="TH">
					<com:Name xml:lang="en">Thailand</com:Name>
					<com:Name xml:lang="es">Tailandia</com:Name>
					<com:Name xml:lang="fr">Thaïlande</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TJ" id="TJ">
					<com:Name xml:lang="en">Tajikistan</com:Name>
					<com:Name xml:lang="es">Tayikistán</com:Name>
					<com:Name xml:lang="fr">Tadjikistan</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TK" id="TK">
					<com:Name xml:lang="en">Tokelau</com:Name>
					<com:Name xml:lang="es">Tokelau</com:Name>
					<com:Name xml:lang="fr">Tokélaou</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TL" id="TL">
					<com:Name xml:lang="en">Timor-Leste</com:Name>
					<com:Name xml:lang="es">Timor-Leste</com:Name>
					<com:Name xml:lang="fr">Timor-Leste</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TM" id="TM">
					<com:Name xml:lang="en">Turkmenistan</com:Name>
					<com:Name xml:lang="es">Turkmenistán</com:Name>
					<com:Name xml:lang="fr">Turkménistan</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TN" id="TN">
					<com:Name xml:lang="en">Tunisia</com:Name>
					<com:Name xml:lang="es">Túnez</com:Name>
					<com:Name xml:lang="fr">Tunisie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TO" id="TO">
					<com:Name xml:lang="en">Tonga</com:Name>
					<com:Name xml:lang="es">Tonga</com:Name>
					<com:Name xml:lang="fr">Tonga</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TR" id="TR">
					<com:Name xml:lang="en">Turkey</com:Name>
					<com:Name xml:lang="es">Turquía</com:Name>
					<com:Name xml:lang="fr">Turquie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TT" id="TT">
					<com:Name xml:lang="en">Trinidad and Tobago</com:Name>
					<com:Name xml:lang="es">Trinidad y Tabago</com:Name>
					<com:Name xml:lang="fr">Trinité-et-Tobago</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TV" id="TV">
					<com:Name xml:lang="en">Tuvalu</com:Name>
					<com:Name xml:lang="es">Tuvalu</com:Name>
					<com:Name xml:lang="fr">Tuvalu</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).TZ" id="TZ">
					<com:Name xml:lang="en">United Republic of Tanzania</com:Name>
					<com:Name xml:lang="es">República Unida de Tanzanía (la)</com:Name>
					<com:Name xml:lang="fr">République-Unie de Tanzanie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).UA" id="UA">
					<com:Name xml:lang="en">Ukraine</com:Name>
					<com:Name xml:lang="es">Ucrania</com:Name>
					<com:Name xml:lang="fr">Ukraine</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).UG" id="UG">
					<com:Name xml:lang="en">Uganda</com:Name>
					<com:Name xml:lang="es">Uganda</com:Name>
					<com:Name xml:lang="fr">Ouganda</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).US" id="US">
					<com:Name xml:lang="en">United States of America</com:Name>
					<com:Name xml:lang="es">Estados Unidos de América</com:Name>
					<com:Name xml:lang="fr">États-Unis d'Amérique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).UY" id="UY">
					<com:Name xml:lang="en">Uruguay</com:Name>
					<com:Name xml:lang="es">Uruguay</com:Name>
					<com:Name xml:lang="fr">Uruguay</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).UZ" id="UZ">
					<com:Name xml:lang="en">Uzbekistan</com:Name>
					<com:Name xml:lang="es">Uzbekistán</com:Name>
					<com:Name xml:lang="fr">Ouzbékistan</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).VC" id="VC">
					<com:Name xml:lang="en">Saint Vincent and the Grenadines</com:Name>
					<com:Name xml:lang="es">San Vicente y las Granadinas</com:Name>
					<com:Name xml:lang="fr">Saint-Vincent-et-les Grenadines</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).VE" id="VE">
					<com:Name xml:lang="en">Venezuela (Bolivarian Republic of)</com:Name>
					<com:Name xml:lang="es">Venezuela (República Bolivariana de)</com:Name>
					<com:Name xml:lang="fr">Venezuela (République bolivarienne du)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).VG" id="VG">
					<com:Name xml:lang="en">British Virgin Islands</com:Name>
					<com:Name xml:lang="es">Islas Vírgenes Británicas</com:Name>
					<com:Name xml:lang="fr">Iles Vierges britanniques</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).VN" id="VN">
					<com:Name xml:lang="en">Viet Nam</com:Name>
					<com:Name xml:lang="es">Viet Nam</com:Name>
					<com:Name xml:lang="fr">Viet Nam</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).VU" id="VU">
					<com:Name xml:lang="en">Vanuatu</com:Name>
					<com:Name xml:lang="es">Vanuatu</com:Name>
					<com:Name xml:lang="fr">Vanuatu</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).WS" id="WS">
					<com:Name xml:lang="en">Samoa</com:Name>
					<com:Name xml:lang="es">Samoa</com:Name>
					<com:Name xml:lang="fr">Samoa</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).YE" id="YE">
					<com:Name xml:lang="en">Yemen</com:Name>
					<com:Name xml:lang="es">Yemen</com:Name>
					<com:Name xml:lang="fr">Yémen</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).ZM" id="ZM">
					<com:Name xml:lang="en">Zambia</com:Name>
					<com:Name xml:lang="es">Zambia</com:Name>
					<com:Name xml:lang="fr">Zambie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).ZW" id="ZW">
					<com:Name xml:lang="en">Zimbabwe</com:Name>
					<com:Name xml:lang="es">Zimbabwe</com:Name>
					<com:Name xml:lang="fr">Zimbabwe</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).ZA" id="ZA">
					<com:Name xml:lang="en">South Africa</com:Name>
					<com:Name xml:lang="es">Sudáfrica</com:Name>
					<com:Name xml:lang="fr">Afrique du Sud</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).WB_HIC" id="WB_HIC">
					<com:Name xml:lang="en">High income</com:Name>
					<com:Name xml:lang="es">Altos ingresos</com:Name>
					<com:Name xml:lang="fr">Revenu élevé</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).AS" id="AS">
					<com:Name xml:lang="en">American Samoa</com:Name>
					<com:Name xml:lang="es">Samoa Americanas</com:Name>
					<com:Name xml:lang="fr">Samoa américaines</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).FO" id="FO">
					<com:Name xml:lang="en">Faeroe Islands</com:Name>
					<com:Name xml:lang="es">Islas Feroé</com:Name>
					<com:Name xml:lang="fr">Iles Féroé</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GU" id="GU">
					<com:Name xml:lang="en">Guam</com:Name>
					<com:Name xml:lang="es">Guam</com:Name>
					<com:Name xml:lang="fr">Guam</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).IM" id="IM">
					<com:Name xml:lang="en">Isle of Man</com:Name>
					<com:Name xml:lang="es">Isla de Man</com:Name>
					<com:Name xml:lang="fr">Île de Man</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MP" id="MP">
					<com:Name xml:lang="en">Northern Mariana Islands</com:Name>
					<com:Name xml:lang="es">Islas Marianas del Norte</com:Name>
					<com:Name xml:lang="fr">Îles Mariannes septentrionales</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).NC" id="NC">
					<com:Name xml:lang="en">New Caledonia</com:Name>
					<com:Name xml:lang="es">Nueva Caledonia</com:Name>
					<com:Name xml:lang="fr">Nouvelle-Calédonie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).PF" id="PF">
					<com:Name xml:lang="en">French Polynesia</com:Name>
					<com:Name xml:lang="es">Polinesia Francesa</com:Name>
					<com:Name xml:lang="fr">Polynésie française</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).VI" id="VI">
					<com:Name xml:lang="en">United States Virgin Islands</com:Name>
					<com:Name xml:lang="es">Islas Vírgenes Estadounidenses</com:Name>
					<com:Name xml:lang="fr">Îles Vierges américaines</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).CS" id="CS">
					<com:Name xml:lang="en">Channel Islands</com:Name>
					<com:Name xml:lang="es">Islas del Canal</com:Name>
					<com:Name xml:lang="fr">Îles Anglo-Normandes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).WB_LIC" id="WB_LIC">
					<com:Name xml:lang="en">Lower income</com:Name>
					<com:Name xml:lang="es">Bajos ingresos</com:Name>
					<com:Name xml:lang="fr">Faible revenu</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).WB_MIC" id="WB_MIC">
					<com:Name xml:lang="en">Middle income</com:Name>
					<com:Name xml:lang="es">Ingreso medio</com:Name>
					<com:Name xml:lang="fr">Revenu intermédiaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).WB_LMC" id="WB_LMC">
					<com:Name xml:lang="en">Lower middle income</com:Name>
					<com:Name xml:lang="es">Ingresos medianos bajos</com:Name>
					<com:Name xml:lang="fr">Revenu intermédiaire inférieur</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).WB_UMC" id="WB_UMC">
					<com:Name xml:lang="en">Upper middle income</com:Name>
					<com:Name xml:lang="es">Ingreso medio alto</com:Name>
					<com:Name xml:lang="fr">Revenu intermédiaire supérieur</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_LAC" id="SDG_LAC">
					<com:Name xml:lang="en">Latin America and the Caribbean</com:Name>
					<com:Name xml:lang="es">América Latina y el Caribe</com:Name>
					<com:Name xml:lang="fr">Amérique latine et Caraïbes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_OCE" id="SDG_OCE">
					<com:Name xml:lang="en">Oceania</com:Name>
					<com:Name xml:lang="es">Oceanía</com:Name>
					<com:Name xml:lang="fr">Océanie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_SEAS" id="SDG_SEAS">
					<com:Name xml:lang="en">South-eastern Asia</com:Name>
					<com:Name xml:lang="es">Asia sudoriental</com:Name>
					<com:Name xml:lang="fr">Asie du Sud-Est</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_WEST_AS" id="SDG_WEST_AS">
					<com:Name xml:lang="en">Western Asia</com:Name>
					<com:Name xml:lang="es">Asia Occidental</com:Name>
					<com:Name xml:lang="fr">Asie de l'Ouest</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_NAFR" id="SDG_NAFR">
					<com:Name xml:lang="en">Northern Africa</com:Name>
					<com:Name xml:lang="es">África del Norte</com:Name>
					<com:Name xml:lang="fr">Afrique du Nord</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_SSA" id="SDG_SSA">
					<com:Name xml:lang="en">Sub-Saharan Africa</com:Name>
					<com:Name xml:lang="es">África subsahariana</com:Name>
					<com:Name xml:lang="fr">Afrique subsaharienne</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_EAS" id="SDG_EAS">
					<com:Name xml:lang="en">Eastern Asia</com:Name>
					<com:Name xml:lang="es">Asia oriental</com:Name>
					<com:Name xml:lang="fr">Asie de l'Est</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_SAS" id="SDG_SAS">
					<com:Name xml:lang="en">Southern Asia</com:Name>
					<com:Name xml:lang="es">Asia meridional</com:Name>
					<com:Name xml:lang="fr">Asie du Sud</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_CAU_CEN_ASIA" id="SDG_CAU_CEN_ASIA">
					<com:Name xml:lang="en">Caucasus and Central Asia</com:Name>
					<com:Name xml:lang="es">Cáucaso y Asia Central</com:Name>
					<com:Name xml:lang="fr">Caucase et Asie centrale</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_DEVELOPED_REG" id="SDG_DEVELOPED_REG">
					<com:Name xml:lang="en">Developed regions</com:Name>
					<com:Name xml:lang="es">Regiones desarrolladas</com:Name>
					<com:Name xml:lang="fr">Régions développées</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).SDG_WORLD" id="SDG_WORLD">
					<com:Name xml:lang="en">All countries</com:Name>
					<com:Name xml:lang="es">Todos los países</com:Name>
					<com:Name xml:lang="fr">Monde</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).BQ" id="BQ">
					<com:Name xml:lang="en">Bonaire, Sint Eustatius and Saba</com:Name>
					<com:Name xml:lang="es">Bonaire, Sint Eustatius y Saba</com:Name>
					<com:Name xml:lang="fr">Bonaire, Saint-Eustache et Saba</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).FK" id="FK">
					<com:Name xml:lang="en">Falkland Islands (Malvinas)</com:Name>
					<com:Name xml:lang="es">Islas Malvinas (Falkland Islands)</com:Name>
					<com:Name xml:lang="fr">Iles Falkland (Malvinas)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GF" id="GF">
					<com:Name xml:lang="en">French Guiana</com:Name>
					<com:Name xml:lang="es">Guyana Francesa</com:Name>
					<com:Name xml:lang="fr">Guyane française</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).GP" id="GP">
					<com:Name xml:lang="en">Guadeloupe</com:Name>
					<com:Name xml:lang="es">Guadalupe</com:Name>
					<com:Name xml:lang="fr">Guadeloupe</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).MQ" id="MQ">
					<com:Name xml:lang="en">Martinique</com:Name>
					<com:Name xml:lang="es">Martinica</com:Name>
					<com:Name xml:lang="fr">Martinique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).YT" id="YT">
					<com:Name xml:lang="en">Mayotte</com:Name>
					<com:Name xml:lang="es">Mayotte</com:Name>
					<com:Name xml:lang="fr">Mayotte</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).RE" id="RE">
					<com:Name xml:lang="en">Réunion</com:Name>
					<com:Name xml:lang="es">Reunión</com:Name>
					<com:Name xml:lang="fr">Réunion</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_AREA(1.0).EH" id="EH">
					<com:Name xml:lang="en">Western Sahara</com:Name>
					<com:Name xml:lang="es">Sahara Occidental</com:Name>
					<com:Name xml:lang="fr">Sahara occidental</com:Name>
				</str:Code>
			</str:Codelist>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=UNESCO:CL_EDU_CAT(1.0)" isExternalReference="false" agencyID="UNESCO" id="CL_EDU_CAT" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Education category</com:Name>
				<com:Name xml:lang="es">Categoría de la educación</com:Name>
				<com:Name xml:lang="fr">Catégorie d'enseignement</com:Name>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_CAT(1.0)._T" id="_T">
					<com:Name xml:lang="en">Total</com:Name>
					<com:Name xml:lang="es">Total</com:Name>
					<com:Name xml:lang="fr">Total</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_CAT(1.0).C1" id="C1">
					<com:Name xml:lang="en">Early childhood educational development</com:Name>
					<com:Name xml:lang="es">Desarrollo educacional de la primera infancia</com:Name>
					<com:Name xml:lang="fr">Développement éducatif de la petite enfance</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_CAT(1.0).C2" id="C2">
					<com:Name xml:lang="en">Pre-primary education</com:Name>
					<com:Name xml:lang="es">Educación preprimaria</com:Name>
					<com:Name xml:lang="fr">Enseignement préprimaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_CAT(1.0).C4" id="C4">
					<com:Name xml:lang="en">General programmes</com:Name>
					<com:Name xml:lang="es">Programas generales</com:Name>
					<com:Name xml:lang="fr">Enseignement général</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_CAT(1.0).C5" id="C5">
					<com:Name xml:lang="en">Vocational programmes</com:Name>
					<com:Name xml:lang="es">Programas vocacionales</com:Name>
					<com:Name xml:lang="fr">Enseignement professionnel</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_CAT(1.0)._Z" id="_Z">
					<com:Name xml:lang="en">Not applicable</com:Name>
					<com:Name xml:lang="es">No aplicable</com:Name>
					<com:Name xml:lang="fr">Non applicable</com:Name>
				</str:Code>
			</str:Codelist>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=UNESCO:CL_EDU_LEVEL(1.0)" isExternalReference="false" agencyID="UNESCO" id="CL_EDU_LEVEL" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Level of education</com:Name>
				<com:Name xml:lang="es">Nivel de educación</com:Name>
				<com:Name xml:lang="fr">Niveau d'enseignement</com:Name>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0)._T" id="_T">
					<com:Name xml:lang="en">Total</com:Name>
					<com:Name xml:lang="es">Total</com:Name>
					<com:Name xml:lang="fr">Total</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L0" id="L0">
					<com:Name xml:lang="en">Early childhood education</com:Name>
					<com:Name xml:lang="es">Educación de la primera infancia</com:Name>
					<com:Name xml:lang="fr">Education de la petite enfance</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L1" id="L1">
					<com:Name xml:lang="en">Primary education</com:Name>
					<com:Name xml:lang="es">Educación primaria</com:Name>
					<com:Name xml:lang="fr">Enseignement primaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L2" id="L2">
					<com:Name xml:lang="en">Lower secondary education</com:Name>
					<com:Name xml:lang="es">Educación secundaria baja</com:Name>
					<com:Name xml:lang="fr">Premier cycle de l’enseignement secondaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L1_2" id="L1_2">
					<com:Name xml:lang="en">Primary and lower secondary education</com:Name>
					<com:Name xml:lang="es">Educación primaria y secundaria baja</com:Name>
					<com:Name xml:lang="fr">Enseignement primaire et premier cycle de l'enseignement secondaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L3" id="L3">
					<com:Name xml:lang="en">Upper secondary education</com:Name>
					<com:Name xml:lang="es">Educación secundaria alta</com:Name>
					<com:Name xml:lang="fr">Deuxième cycle de l’enseignement secondaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L1T3" id="L1T3">
					<com:Name xml:lang="en">Primary and secondary education</com:Name>
					<com:Name xml:lang="es">Educación primaria y secundaria</com:Name>
					<com:Name xml:lang="fr">Enseignement primaire et secondaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L2_3" id="L2_3">
					<com:Name xml:lang="en">Secondary education</com:Name>
					<com:Name xml:lang="es">Educación secundaria</com:Name>
					<com:Name xml:lang="fr">Enseignement secondaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L4" id="L4">
					<com:Name xml:lang="en">Post-secondary non-tertiary education</com:Name>
					<com:Name xml:lang="es">Educación post-secundaria no terciaria</com:Name>
					<com:Name xml:lang="fr">Enseignement post-secondaire non-supérieur</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L2T4" id="L2T4">
					<com:Name xml:lang="en">Secondary and post-secondary non-tertiary education</com:Name>
					<com:Name xml:lang="es">Educación secundaria y post-secundaria no terciaria</com:Name>
					<com:Name xml:lang="fr">Enseignement secondaire et post-secondaire non-supérieur</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L5" id="L5">
					<com:Name xml:lang="en">Short-cycle tertiary education</com:Name>
					<com:Name xml:lang="es">Educación terciaria de ciclo corto</com:Name>
					<com:Name xml:lang="fr">Enseignement supérieur de cycle court</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L6" id="L6">
					<com:Name xml:lang="en">Bachelor’s or equivalent level</com:Name>
					<com:Name xml:lang="es">Grado en educación terciaria o nivel equivalente</com:Name>
					<com:Name xml:lang="fr">Licence ou niveau équivalent</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L7" id="L7">
					<com:Name xml:lang="en">Master’s or equivalent level</com:Name>
					<com:Name xml:lang="es">Nivel de maestría, especialización o equivalente</com:Name>
					<com:Name xml:lang="fr">Master ou niveau équivalent</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L6_7" id="L6_7">
					<com:Name xml:lang="en">Bachelor’s to Master’s or equivalent level</com:Name>
					<com:Name xml:lang="es">Grado en educación terciaria a nivel de maestría, especialización o equivalente</com:Name>
					<com:Name xml:lang="fr">Licence à Master ou niveau équivalent</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L8" id="L8">
					<com:Name xml:lang="en">Doctoral or equivalent level</com:Name>
					<com:Name xml:lang="es">Nivel de doctorado o equivalente</com:Name>
					<com:Name xml:lang="fr">Doctorat ou niveau équivalent</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L1T8" id="L1T8">
					<com:Name xml:lang="en">Primary to tertiary education</com:Name>
					<com:Name xml:lang="es">Educación primaria a terciaria</com:Name>
					<com:Name xml:lang="fr">Primaire à l'enseignement supérieur</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L5T8" id="L5T8">
					<com:Name xml:lang="en">Tertiary education</com:Name>
					<com:Name xml:lang="es">Educación terciaria</com:Name>
					<com:Name xml:lang="fr">Enseignement supérieur</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).COMP_EDU" id="COMP_EDU">
					<com:Name xml:lang="en">Compulsory education</com:Name>
					<com:Name xml:lang="es">Educación obligatoria</com:Name>
					<com:Name xml:lang="fr">Enseignement obligatoire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0)._X" id="_X">
					<com:Name xml:lang="en">Not allocated by level</com:Name>
					<com:Name xml:lang="es">Nivel sin especificar</com:Name>
					<com:Name xml:lang="fr">Non réparties par niveau</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0)._Z" id="_Z">
					<com:Name xml:lang="en">Not applicable</com:Name>
					<com:Name xml:lang="es">No aplicable</com:Name>
					<com:Name xml:lang="fr">Non applicable</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L6T8" id="L6T8">
					<com:Name xml:lang="en">Bachelor’s to Doctoral or equivalent level</com:Name>
					<com:Name xml:lang="es">Grado en educación terciaria a nivel de doctorado o equivalente</com:Name>
					<com:Name xml:lang="fr">Licence au Doctorat ou niveau équivalent</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EDU_LEVEL(1.0).L5T7" id="L5T7">
					<com:Name xml:lang="en">Short-cycle tertiary education to Master’s or equivalent level</com:Name>
					<com:Name xml:lang="es">Educación terciaria de ciclo corto a nivel de maestría, especialización o equivalente</com:Name>
					<com:Name xml:lang="fr">Enseignement supérieur de cycle court à Master ou niveau équivalent</com:Name>
				</str:Code>
			</str:Codelist>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=UNESCO:CL_EXPENDITURE_TYPE(1.0)" isExternalReference="false" agencyID="UNESCO" id="CL_EXPENDITURE_TYPE" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Type of expenditure</com:Name>
				<com:Name xml:lang="es">Tipo de gasto</com:Name>
				<com:Name xml:lang="fr">Type de dépenses</com:Name>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EXPENDITURE_TYPE(1.0)._T" id="_T">
					<com:Name xml:lang="en">Total</com:Name>
					<com:Name xml:lang="es">Total</com:Name>
					<com:Name xml:lang="fr">Total</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EXPENDITURE_TYPE(1.0).CUR" id="CUR">
					<com:Name xml:lang="en">Current</com:Name>
					<com:Name xml:lang="es">Corriente</com:Name>
					<com:Name xml:lang="fr">Dépenses courantes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EXPENDITURE_TYPE(1.0).CUR_SAL" id="CUR_SAL">
					<com:Name xml:lang="en">Current, compensation of personnel</com:Name>
					<com:Name xml:lang="es">Corriente, compensación del personal</com:Name>
					<com:Name xml:lang="fr">Rémunération du personnel</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EXPENDITURE_TYPE(1.0).CUR_OTH" id="CUR_OTH">
					<com:Name xml:lang="en">Current, other than for compensation of personnel</com:Name>
					<com:Name xml:lang="es">Corriente, distinto al destinado a compensación del personal</com:Name>
					<com:Name xml:lang="fr">Dépenses courantes autres que pour la rémunération</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_EXPENDITURE_TYPE(1.0).CAP" id="CAP">
					<com:Name xml:lang="en">Capital</com:Name>
					<com:Name xml:lang="es">Capital</com:Name>
					<com:Name xml:lang="fr">Dépenses en capital</com:Name>
				</str:Code>
			</str:Codelist>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=UNESCO:CL_OBS_STATUS(1.0)" isExternalReference="false" agencyID="UNESCO" id="CL_OBS_STATUS" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Observation status</com:Name>
				<com:Name xml:lang="es">Estado de observación</com:Name>
				<com:Name xml:lang="fr">Etat d'observation</com:Name>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).A" id="A">
					<com:Name xml:lang="en">Normal</com:Name>
					<com:Name xml:lang="es">Valor normal</com:Name>
					<com:Name xml:lang="fr">Valeur normale</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).B" id="B">
					<com:Name xml:lang="en">Time series break</com:Name>
					<com:Name xml:lang="es">Corte en las series temporales</com:Name>
					<com:Name xml:lang="fr">Valeur de rupture</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).D" id="D">
					<com:Name xml:lang="en">Definition differs</com:Name>
					<com:Name xml:lang="es">La definición difiere</com:Name>
					<com:Name xml:lang="fr">Définition diffère</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).E" id="E">
					<com:Name xml:lang="en">Estimated value</com:Name>
					<com:Name xml:lang="es">Valor estimado</com:Name>
					<com:Name xml:lang="fr">Valeur estimée</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).F" id="F">
					<com:Name xml:lang="en">Forecast value</com:Name>
					<com:Name xml:lang="es">Valor pronosticado</com:Name>
					<com:Name xml:lang="fr">Valeur prévisionnelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).G" id="G">
					<com:Name xml:lang="en">Experimental value</com:Name>
					<com:Name xml:lang="es">Valor experimental</com:Name>
					<com:Name xml:lang="fr">Valeur expérimentale</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).I" id="I">
					<com:Name xml:lang="en">Imputed value (CCSA definition)</com:Name>
					<com:Name xml:lang="es">Valor imputado (definición CCSA)</com:Name>
					<com:Name xml:lang="fr">Valeur est imputée (définition de le Comité de coordination des activités statistiques)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).M" id="M">
					<com:Name xml:lang="en">Missing value</com:Name>
					<com:Name xml:lang="es">Valor faltante; datos no pueden existir</com:Name>
					<com:Name xml:lang="fr">Valeur manquante</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).P" id="P">
					<com:Name xml:lang="en">Provisional value</com:Name>
					<com:Name xml:lang="es">Valor provisorio</com:Name>
					<com:Name xml:lang="fr">Valeur provisoire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).L" id="L">
					<com:Name xml:lang="en">Missing value; data exist but were not collected</com:Name>
					<com:Name xml:lang="es">Valor faltante; datos existentes pero no recogidos</com:Name>
					<com:Name xml:lang="fr">Valeur non disponible, données existantes mais n'étant pas collectées</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).Q" id="Q">
					<com:Name xml:lang="en">Missing value: suppressed</com:Name>
					<com:Name xml:lang="es">Valor faltante; suprimido</com:Name>
					<com:Name xml:lang="fr">Valeur manquante: supprimée</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).J" id="J">
					<com:Name xml:lang="en">Derogation</com:Name>
					<com:Name xml:lang="es">Humillación</com:Name>
					<com:Name xml:lang="fr">Dérogation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).N" id="N">
					<com:Name xml:lang="en">Not significant</com:Name>
					<com:Name xml:lang="es">Insignificante</com:Name>
					<com:Name xml:lang="fr">Pas significative</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).U" id="U">
					<com:Name xml:lang="en">Low reliability: publishable but with caution</com:Name>
					<com:Name xml:lang="es">Baja fiabilidad</com:Name>
					<com:Name xml:lang="fr">Faible fiabilité: publiable mais avec prudence</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).V" id="V">
					<com:Name xml:lang="en">Unvalidated value</com:Name>
					<com:Name xml:lang="es">Valor no validado</com:Name>
					<com:Name xml:lang="fr">Valeur non valide</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).X" id="X">
					<com:Name xml:lang="en">Data included in another category</com:Name>
					<com:Name xml:lang="es">Datos incluidos en otra categoría</com:Name>
					<com:Name xml:lang="fr">Données incluses ailleurs</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).W" id="W">
					<com:Name xml:lang="en">Includes data from another category</com:Name>
					<com:Name xml:lang="es">Incluye datos de otra categoría</com:Name>
					<com:Name xml:lang="fr">Inclut les données d'une autre catégorie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).Z" id="Z">
					<com:Name xml:lang="en">Not applicable</com:Name>
					<com:Name xml:lang="es">No aplicable</com:Name>
					<com:Name xml:lang="fr">Non applicable</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_OBS_STATUS(1.0).O" id="O">
					<com:Name xml:lang="en">Missing value</com:Name>
					<com:Name xml:lang="es">Valor faltante</com:Name>
					<com:Name xml:lang="fr">Valeur manquante</com:Name>
				</str:Code>
			</str:Codelist>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=UNESCO:CL_SECTOR_EDU(1.0)" isExternalReference="false" agencyID="UNESCO" id="CL_SECTOR_EDU" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Type of institution</com:Name>
				<com:Name xml:lang="es">Tipo de establecimiento</com:Name>
				<com:Name xml:lang="fr">Type d'établissement</com:Name>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_SECTOR_EDU(1.0)._T" id="_T">
					<com:Name xml:lang="en">Total</com:Name>
					<com:Name xml:lang="es">Total</com:Name>
					<com:Name xml:lang="fr">Total</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_SECTOR_EDU(1.0).INST_T" id="INST_T">
					<com:Name xml:lang="en">All institutions</com:Name>
					<com:Name xml:lang="es">Todas las instituciones</com:Name>
					<com:Name xml:lang="fr">Tous les établissements</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_SECTOR_EDU(1.0).INST_PUB" id="INST_PUB">
					<com:Name xml:lang="en">Public institutions</com:Name>
					<com:Name xml:lang="es">Instituciones públicas</com:Name>
					<com:Name xml:lang="fr">Etablissements publics</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_SECTOR_EDU(1.0).INST_PRIV" id="INST_PRIV">
					<com:Name xml:lang="en">Private institutions</com:Name>
					<com:Name xml:lang="es">Instituciones privadas</com:Name>
					<com:Name xml:lang="fr">Etablissements privés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_SECTOR_EDU(1.0)._Z" id="_Z">
					<com:Name xml:lang="en">Not applicable</com:Name>
					<com:Name xml:lang="es">No aplicable</com:Name>
					<com:Name xml:lang="fr">Non applicable</com:Name>
				</str:Code>
			</str:Codelist>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=UNESCO:CL_STAT_UNIT(1.0)" isExternalReference="false" agencyID="UNESCO" id="CL_STAT_UNIT" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Statistical unit</com:Name>
				<com:Name xml:lang="es">Unidad estadística</com:Name>
				<com:Name xml:lang="fr">Unité statistique</com:Name>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).POP" id="POP">
					<com:Name xml:lang="en">Population</com:Name>
					<com:Name xml:lang="es">Población</com:Name>
					<com:Name xml:lang="fr">Population</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GDP" id="GDP">
					<com:Name xml:lang="en">Gross domestic product</com:Name>
					<com:Name xml:lang="es">Producto interno bruto</com:Name>
					<com:Name xml:lang="fr">Produit intérieur brut</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GDP_DEFL" id="GDP_DEFL">
					<com:Name xml:lang="en">GDP deflator</com:Name>
					<com:Name xml:lang="es">Deflactor del PIB</com:Name>
					<com:Name xml:lang="fr">Déflateur du PIB</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GDP_CAP" id="GDP_CAP">
					<com:Name xml:lang="en">GDP per capita</com:Name>
					<com:Name xml:lang="es">PIB per cápita</com:Name>
					<com:Name xml:lang="fr">PIB par habitant</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).PPP_FACTOR" id="PPP_FACTOR">
					<com:Name xml:lang="en">PPP conversion factor</com:Name>
					<com:Name xml:lang="es">Factor de conversión del PPA</com:Name>
					<com:Name xml:lang="fr">Facteur de conversion PPA</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GNI_CAP" id="GNI_CAP">
					<com:Name xml:lang="en">GNI per capita</com:Name>
					<com:Name xml:lang="es">Ingreso nacional bruto (INB) per cápita</com:Name>
					<com:Name xml:lang="fr">RNB par habitant</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).EDU_EXP" id="EDU_EXP">
					<com:Name xml:lang="en">Expenditure on education</com:Name>
					<com:Name xml:lang="es">Gasto en educación</com:Name>
					<com:Name xml:lang="fr">Dépenses pour l'éducation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TDS" id="TDS">
					<com:Name xml:lang="en">Total debt service</com:Name>
					<com:Name xml:lang="es">Total del servicio de la deuda</com:Name>
					<com:Name xml:lang="fr">Total du service de la dette</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).AIR" id="AIR">
					<com:Name xml:lang="en">Gross intake ratio</com:Name>
					<com:Name xml:lang="es">Tasa bruta de admisión</com:Name>
					<com:Name xml:lang="fr">Taux brut d'admission</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).AVG_CLS" id="AVG_CLS">
					<com:Name xml:lang="en">Average number of students per class</com:Name>
					<com:Name xml:lang="es">Promedio de estudiantes por clase</com:Name>
					<com:Name xml:lang="fr">Taille moyenne d'une classe</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).DR" id="DR">
					<com:Name xml:lang="en">Drop-out rate</com:Name>
					<com:Name xml:lang="es">Tasa de deserción</com:Name>
					<com:Name xml:lang="fr">Taux d'abandon</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).EA" id="EA">
					<com:Name xml:lang="en">Educational attainment</com:Name>
					<com:Name xml:lang="es">Logro educativo</com:Name>
					<com:Name xml:lang="fr">Niveau d’éducation atteint</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ESL" id="ESL">
					<com:Name xml:lang="en">Early school leavers</com:Name>
					<com:Name xml:lang="es">Niños que abandonan la escuela prematuramente</com:Name>
					<com:Name xml:lang="fr">Enfants quittant prématurément l'école</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GER" id="GER">
					<com:Name xml:lang="en">Gross enrolment ratio</com:Name>
					<com:Name xml:lang="es">Tasa bruta de matrícula</com:Name>
					<com:Name xml:lang="fr">Taux brut de scolarisation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GGR" id="GGR">
					<com:Name xml:lang="en">Gross graduation ratio</com:Name>
					<com:Name xml:lang="es">Tasa bruta de graduación</com:Name>
					<com:Name xml:lang="fr">Taux brut de diplômés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GRAD" id="GRAD">
					<com:Name xml:lang="en">Graduates</com:Name>
					<com:Name xml:lang="es">Graduados</com:Name>
					<com:Name xml:lang="fr">Diplômés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ILLPOP" id="ILLPOP">
					<com:Name xml:lang="en">Illiterate population</com:Name>
					<com:Name xml:lang="es">Población analfabeta</com:Name>
					<com:Name xml:lang="fr">Population analphabète</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).LR" id="LR">
					<com:Name xml:lang="en">Literacy rate</com:Name>
					<com:Name xml:lang="es">Tasa de alfabetismo</com:Name>
					<com:Name xml:lang="fr">Taux d’alphabétisme</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).MENF" id="MENF">
					<com:Name xml:lang="en">Net flow of internationally mobile students</com:Name>
					<com:Name xml:lang="es">Flujo neto de estudiantes internacionalmente móviles</com:Name>
					<com:Name xml:lang="fr">Flux net des étudiants en mobilité internationale</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).MENFR" id="MENFR">
					<com:Name xml:lang="en">Net flow ratio of internationally mobile students</com:Name>
					<com:Name xml:lang="es">Tasa del flujo neto de estudiantes internacionalmente  móviles</com:Name>
					<com:Name xml:lang="fr">Taux net de flux des étudiants en mobilité internationale</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).MEXPT" id="MEXPT">
					<com:Name xml:lang="en">Mean teaching experience</com:Name>
					<com:Name xml:lang="es">Media de años de experiencia pedagógica del total  de docentes</com:Name>
					<com:Name xml:lang="fr">Nombre moyens d'années d'expérience dans l'enseignement</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).MOGER" id="MOGER">
					<com:Name xml:lang="en">Gross outbound enrolment ratio</com:Name>
					<com:Name xml:lang="es">Tasa bruta de matrícula en el extranjero</com:Name>
					<com:Name xml:lang="fr">Taux brut de scolarisation à l'étranger</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).MOR" id="MOR">
					<com:Name xml:lang="en">Outbound mobility ratio</com:Name>
					<com:Name xml:lang="es">Tasa de movilidad hacia el extranjero</com:Name>
					<com:Name xml:lang="fr">Taux de mobilité vers l'étranger</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).MSEP" id="MSEP">
					<com:Name xml:lang="en">Inbound mobility rate</com:Name>
					<com:Name xml:lang="es">Tasa de movilidad hacia el país anfitrión</com:Name>
					<com:Name xml:lang="fr">Taux de mobilité vers le pays d'accueil</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).MYS" id="MYS">
					<com:Name xml:lang="en">Mean years of schooling</com:Name>
					<com:Name xml:lang="es">Media de años de escolarización</com:Name>
					<com:Name xml:lang="fr">Nombre moyen d’années de scolarisation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NAR" id="NAR">
					<com:Name xml:lang="en">Net attendance rate</com:Name>
					<com:Name xml:lang="es">Tasa neta de asistencia</com:Name>
					<com:Name xml:lang="fr">Taux net de fréquentation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NARA" id="NARA">
					<com:Name xml:lang="en">Adjusted net attendance rate</com:Name>
					<com:Name xml:lang="es">Tasa neta ajustada de asistencia</com:Name>
					<com:Name xml:lang="fr">Taux net ajusté de fréquentation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NART" id="NART">
					<com:Name xml:lang="en">Total net attendance rate</com:Name>
					<com:Name xml:lang="es">Tasa neta total de asistencia</com:Name>
					<com:Name xml:lang="fr">Taux net total de fréquentation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NENT" id="NENT">
					<com:Name xml:lang="en">New entrants</com:Name>
					<com:Name xml:lang="es">Nuevos ingresos</com:Name>
					<com:Name xml:lang="fr">Nouveaux inscrits</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NENT_P" id="NENT_P">
					<com:Name xml:lang="en">New entrants who have attended any early childhood education programme</com:Name>
					<com:Name xml:lang="es">Nuevos ingresos que asistieron a un programa organizado de educación de la primera infancia</com:Name>
					<com:Name xml:lang="fr">Nouveaux inscrits ayant suivi un programme d’éducation de la petite enfance</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NER" id="NER">
					<com:Name xml:lang="en">Net enrolment rate</com:Name>
					<com:Name xml:lang="es">Tasa neta de matrícula</com:Name>
					<com:Name xml:lang="fr">Taux net de scolarisation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NERA" id="NERA">
					<com:Name xml:lang="en">Adjusted net enrolment rate</com:Name>
					<com:Name xml:lang="es">Tasa neta ajustada de matrícula</com:Name>
					<com:Name xml:lang="fr">Taux net ajusté de scolarisation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NERT" id="NERT">
					<com:Name xml:lang="en">Total net enrolment rate</com:Name>
					<com:Name xml:lang="es">Tasa neta total de matrícula</com:Name>
					<com:Name xml:lang="fr">Taux net total de scolarisation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NIR" id="NIR">
					<com:Name xml:lang="en">Net intake rate</com:Name>
					<com:Name xml:lang="es">Tasa neta de admisión</com:Name>
					<com:Name xml:lang="fr">Taux net d’accès</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NIRA" id="NIRA">
					<com:Name xml:lang="en">Adjusted net intake rate</com:Name>
					<com:Name xml:lang="es">Tasa neta ajustada de admisión</com:Name>
					<com:Name xml:lang="fr">Taux net ajusté d’accès</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NR_TRTEACH" id="NR_TRTEACH">
					<com:Name xml:lang="en">Newly recruited trained teachers</com:Name>
					<com:Name xml:lang="es">Docentes certificados recientemente contratados</com:Name>
					<com:Name xml:lang="fr">Enseignants nouvellement recrutés qui sont formés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NRTEACH" id="NRTEACH">
					<com:Name xml:lang="en">Newly recruited teachers</com:Name>
					<com:Name xml:lang="es">Docentes recientemente contratados</com:Name>
					<com:Name xml:lang="fr">Enseignants nouvellement recrutés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).OFST" id="OFST">
					<com:Name xml:lang="en">Out-of-school children</com:Name>
					<com:Name xml:lang="es">Niños no escolarizados</com:Name>
					<com:Name xml:lang="fr">Enfants non scolarisés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).OFSPPT" id="OFSPPT">
					<com:Name xml:lang="en">Out-of-school children of primary school age in pre-primary education</com:Name>
					<com:Name xml:lang="es">Niños no escolarizados en edad de cursar primaria  que están en educación preprimaria</com:Name>
					<com:Name xml:lang="fr">Enfants non scolarisés ayant l'âge de l'enseignement primaire au préprimaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).PQTR" id="PQTR">
					<com:Name xml:lang="en">Pupil/qualified teacher ratio</com:Name>
					<com:Name xml:lang="es">Tasa alumnos-docente calificado</com:Name>
					<com:Name xml:lang="fr">Ratio élèves/enseignant qualifié</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).PTR" id="PTR">
					<com:Name xml:lang="en">Pupil-teacher ratio</com:Name>
					<com:Name xml:lang="es">Tasa alumnos/docente</com:Name>
					<com:Name xml:lang="fr">Ratio élèves/enseignant</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).PTTR" id="PTTR">
					<com:Name xml:lang="en">Pupil/trained teacher ratio</com:Name>
					<com:Name xml:lang="es">Tasa alumnos/docente certificado</com:Name>
					<com:Name xml:lang="fr">Ratio élèves/enseignant formé</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).QTEACH" id="QTEACH">
					<com:Name xml:lang="en">Qualified teachers</com:Name>
					<com:Name xml:lang="es">Docentes certificados</com:Name>
					<com:Name xml:lang="fr">Enseignants qualifiés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).RPTR" id="RPTR">
					<com:Name xml:lang="en">Repeaters</com:Name>
					<com:Name xml:lang="es">Repetidores</com:Name>
					<com:Name xml:lang="fr">Redoublants</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SAP" id="SAP">
					<com:Name xml:lang="en">School-age population</com:Name>
					<com:Name xml:lang="es">Población en edad escolar</com:Name>
					<com:Name xml:lang="fr">Population d'âge scolaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SCH" id="SCH">
					<com:Name xml:lang="en">School</com:Name>
					<com:Name xml:lang="es">Escuela</com:Name>
					<com:Name xml:lang="fr">Ecole</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SLE" id="SLE">
					<com:Name xml:lang="en">School life expectancy</com:Name>
					<com:Name xml:lang="es">Esperanza de vida escolar</com:Name>
					<com:Name xml:lang="fr">Espérance de vie scolaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SLEN" id="SLEN">
					<com:Name xml:lang="en">School life expectancy (excluding repetition)</com:Name>
					<com:Name xml:lang="es">Esperanza de vida escolar (excluyendo repetición)</com:Name>
					<com:Name xml:lang="fr">Espérance de vie scolaire (excluant redoublement)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SR" id="SR">
					<com:Name xml:lang="en">Survival rate</com:Name>
					<com:Name xml:lang="es">Tasa de supervivencia</com:Name>
					<com:Name xml:lang="fr">Taux de survie</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU" id="STU">
					<com:Name xml:lang="en">Students</com:Name>
					<com:Name xml:lang="es">Estudiantes</com:Name>
					<com:Name xml:lang="fr">Étudiants</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TEACH" id="TEACH">
					<com:Name xml:lang="en">Teachers</com:Name>
					<com:Name xml:lang="es">Docentes</com:Name>
					<com:Name xml:lang="fr">Enseignants</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TATTRR" id="TATTRR">
					<com:Name xml:lang="en">Teacher attrition rate</com:Name>
					<com:Name xml:lang="es">Tasa de deserción de la profesión docente</com:Name>
					<com:Name xml:lang="fr">Taux d'attrition des enseignants</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).PBR" id="PBR">
					<com:Name xml:lang="en">Average number of pupils per textbook</com:Name>
					<com:Name xml:lang="es">Número promedio de alumnos por libro de texto</com:Name>
					<com:Name xml:lang="fr">Nombre moyen d'élèves par manuel scolaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TH_DUR" id="TH_DUR">
					<com:Name xml:lang="en">Theoretical duration</com:Name>
					<com:Name xml:lang="es">Duración teórica</com:Name>
					<com:Name xml:lang="fr">Durée d'études</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TH_ENTRY_AGE" id="TH_ENTRY_AGE">
					<com:Name xml:lang="en">Official entrance age</com:Name>
					<com:Name xml:lang="es">Edad teórica de ingreso</com:Name>
					<com:Name xml:lang="fr">Âge officiel d'entrée</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TRANRA" id="TRANRA">
					<com:Name xml:lang="en">Effective transition rate</com:Name>
					<com:Name xml:lang="es">Tasa de transición efectiva</com:Name>
					<com:Name xml:lang="fr">Taux de transition effective</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TRTEACH" id="TRTEACH">
					<com:Name xml:lang="en">Trained teachers</com:Name>
					<com:Name xml:lang="es">Docentes certificados</com:Name>
					<com:Name xml:lang="fr">Enseignants formés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).EMP" id="EMP">
					<com:Name xml:lang="en">Employed population</com:Name>
					<com:Name xml:lang="es">Población empleada</com:Name>
					<com:Name xml:lang="fr">Population active</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FF" id="FF">
					<com:Name xml:lang="en">Feature film</com:Name>
					<com:Name xml:lang="es">Película de largometraje</com:Name>
					<com:Name xml:lang="fr">Film de long métrage</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FF_NEW_REL" id="FF_NEW_REL">
					<com:Name xml:lang="en">First-time release feature film</com:Name>
					<com:Name xml:lang="es">Estreno de películas de largometraje</com:Name>
					<com:Name xml:lang="fr">Film de long métrage en première exploitation en salle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FF_DIST_COM" id="FF_DIST_COM">
					<com:Name xml:lang="en">Film distribution company</com:Name>
					<com:Name xml:lang="es">Empresa de distribución de películas</com:Name>
					<com:Name xml:lang="fr">Société de distribution de films</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).C_SITE" id="C_SITE">
					<com:Name xml:lang="en">Cinema site</com:Name>
					<com:Name xml:lang="es">Sala cinematográfica</com:Name>
					<com:Name xml:lang="fr">Site de cinéma</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ADM" id="ADM">
					<com:Name xml:lang="en">Admissions</com:Name>
					<com:Name xml:lang="es">Entradas</com:Name>
					<com:Name xml:lang="fr">Entrées</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GBO" id="GBO">
					<com:Name xml:lang="en">Gross box office</com:Name>
					<com:Name xml:lang="es">Recaudación bruta</com:Name>
					<com:Name xml:lang="fr">Recettes brutes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).AVG_TICKET_PRICE" id="AVG_TICKET_PRICE">
					<com:Name xml:lang="en">Average ticket price</com:Name>
					<com:Name xml:lang="es">Precio promedio de la entrada</com:Name>
					<com:Name xml:lang="fr">Prix moyen du billet de cinéma</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).EXH_ENTITY" id="EXH_ENTITY">
					<com:Name xml:lang="en">Exhibition entity</com:Name>
					<com:Name xml:lang="es">Empresa de exhibición</com:Name>
					<com:Name xml:lang="fr">Entreprise d'exploitation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GERD" id="GERD">
					<com:Name xml:lang="en">Gross domestic expenditure on R&amp;D (GERD)</com:Name>
					<com:Name xml:lang="es">Gasto bruto en I+D (GBID)</com:Name>
					<com:Name xml:lang="fr">Dépenses intérieures brutes de R-D (DIRD)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).INNOV_PROD" id="INNOV_PROD">
					<com:Name xml:lang="en">Product innovators</com:Name>
					<com:Name xml:lang="es">Innovadoras de producto</com:Name>
					<com:Name xml:lang="fr">Firmes innovantes en termes de produit</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).INNOV_PROD_ONLY" id="INNOV_PROD_ONLY">
					<com:Name xml:lang="en">Product-only innovators</com:Name>
					<com:Name xml:lang="es">Innovadoras solo de producto</com:Name>
					<com:Name xml:lang="fr">Firmes innovantes uniquement en termes de produit</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).INNOV_PROCESS" id="INNOV_PROCESS">
					<com:Name xml:lang="en">Process innovators</com:Name>
					<com:Name xml:lang="es">Innovadoras de proceso</com:Name>
					<com:Name xml:lang="fr">Firmes innovantes en termes de procédé</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).INNOV_PROCESS_ONLY" id="INNOV_PROCESS_ONLY">
					<com:Name xml:lang="en">Process-only innovators</com:Name>
					<com:Name xml:lang="es">Innovadoras solo de proceso</com:Name>
					<com:Name xml:lang="fr">Firmes innovantes uniquement en termes de procédé</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).INNOV_PROD_PROCESS" id="INNOV_PROD_PROCESS">
					<com:Name xml:lang="en">Product and process innovators</com:Name>
					<com:Name xml:lang="es">Innovadoras de producto y de proceso</com:Name>
					<com:Name xml:lang="fr">Firmes innovantes en termes de produit et de procédé</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).INNOV_FIRM" id="INNOV_FIRM">
					<com:Name xml:lang="en">Innovative firms</com:Name>
					<com:Name xml:lang="es">Empresas innovadoras</com:Name>
					<com:Name xml:lang="fr">Firmes innovantes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).INNOV_ACTIVE_FIRM" id="INNOV_ACTIVE_FIRM">
					<com:Name xml:lang="en">Innovation-active firms</com:Name>
					<com:Name xml:lang="es">Empresas manufactureras con actividades innovadoras</com:Name>
					<com:Name xml:lang="fr">Firmes avec des activités innovantes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NON_INNOV_FIRM" id="NON_INNOV_FIRM">
					<com:Name xml:lang="en">Non-innovative firms</com:Name>
					<com:Name xml:lang="fr">Firmes non innovantes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FIRM" id="FIRM">
					<com:Name xml:lang="en">Manufacturing firms</com:Name>
					<com:Name xml:lang="es">Empresas manufactureras</com:Name>
					<com:Name xml:lang="fr">Firmes manufacturières</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).INNOV_ORG" id="INNOV_ORG">
					<com:Name xml:lang="en">Organizational innovators</com:Name>
					<com:Name xml:lang="es">Innovadoras de organización</com:Name>
					<com:Name xml:lang="fr">Firmes innovantes en termes d'organisation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).INNOV_MRKT" id="INNOV_MRKT">
					<com:Name xml:lang="en">Marketing innovators</com:Name>
					<com:Name xml:lang="es">Innovadoras de mercadotecnia</com:Name>
					<com:Name xml:lang="fr">Firmes innovantes en termes de commercialisation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NTP" id="NTP">
					<com:Name xml:lang="en">Percentage of newly recruited teachers</com:Name>
					<com:Name xml:lang="es">Porcentaje de docentes recientemente contratados</com:Name>
					<com:Name xml:lang="fr">Pourcentage d'enseignants nouvellement recrutés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FNTP" id="FNTP">
					<com:Name xml:lang="en">Percentage of newly recruited female teachers</com:Name>
					<com:Name xml:lang="es">Porcentaje de docentes mujeres recientemente contratadas</com:Name>
					<com:Name xml:lang="fr">Pourcentage d'enseignantes nouvellement recrutés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).RD_PS_FTE" id="RD_PS_FTE">
					<com:Name xml:lang="en">Total R&amp;D personnel (FTE)</com:Name>
					<com:Name xml:lang="es">Total de personal I+D (EJC)</com:Name>
					<com:Name xml:lang="fr">Total du personnel de R-D (EPT)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).RD_PS_HC" id="RD_PS_HC">
					<com:Name xml:lang="en">Total R&amp;D personnel (HC)</com:Name>
					<com:Name xml:lang="es">Total de personal I+D (PF)</com:Name>
					<com:Name xml:lang="fr">Total du personnel de R-D (PP)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).RES_FTE" id="RES_FTE">
					<com:Name xml:lang="en">Researchers (FTE)</com:Name>
					<com:Name xml:lang="es">Investigadores (EJC)</com:Name>
					<com:Name xml:lang="fr">Chercheurs (EPT)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).RES_HC" id="RES_HC">
					<com:Name xml:lang="en">Researchers (HC)</com:Name>
					<com:Name xml:lang="es">Investigadores (PF)</com:Name>
					<com:Name xml:lang="fr">Chercheurs (PP)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TEC_FTE" id="TEC_FTE">
					<com:Name xml:lang="en">Technicians (FTE)</com:Name>
					<com:Name xml:lang="es">Personal técnico (EJC)</com:Name>
					<com:Name xml:lang="fr">Techniciens (EPT)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TEC_HC" id="TEC_HC">
					<com:Name xml:lang="en">Technicians (HC)</com:Name>
					<com:Name xml:lang="es">Personal técnico (PF)</com:Name>
					<com:Name xml:lang="fr">Techniciens (PP)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).OTH_STAFF_FTE" id="OTH_STAFF_FTE">
					<com:Name xml:lang="en">Other supporting staff (FTE)</com:Name>
					<com:Name xml:lang="es">Otro personal de apoyo (EJC)</com:Name>
					<com:Name xml:lang="fr">Personnel de soutien (EPT)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).OTH_STAFF_HC" id="OTH_STAFF_HC">
					<com:Name xml:lang="en">Other supporting staff (HC)</com:Name>
					<com:Name xml:lang="es">Otro personal de apoyo (PF)</com:Name>
					<com:Name xml:lang="fr">Personnel de soutien (PP)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).AB_ONG" id="AB_ONG">
					<com:Name xml:lang="en">Abandoned or ongoing innovation activities</com:Name>
					<com:Name xml:lang="es">Innovaciones abortadas o en curso</com:Name>
					<com:Name xml:lang="fr">Activités d’innovation avortées ou en cours</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU_MOBILE" id="STU_MOBILE">
					<com:Name xml:lang="en">International (or internationally mobile) students</com:Name>
					<com:Name xml:lang="es">Estudiantes internacionales (o internacionalmente móviles)</com:Name>
					<com:Name xml:lang="fr">Étudiants internationaux (ou en mobilité internationale)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ROFST" id="ROFST">
					<com:Name xml:lang="en">Rate of out-of-school children</com:Name>
					<com:Name xml:lang="es">Tasa de niños no escolarizados</com:Name>
					<com:Name xml:lang="fr">Taux d'enfants non scolarisés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ROFSPPT" id="ROFSPPT">
					<com:Name xml:lang="en">Rate of out-of-school children of primary school age in pre-primary education</com:Name>
					<com:Name xml:lang="es">Tasa de niños no escolarizados en edad de cursar primaria  que están en educación preprimaria</com:Name>
					<com:Name xml:lang="fr">Taux d'enfants non scolarisés ayant l'âge de l'enseignement primaire au préprimaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FOSEP" id="FOSEP">
					<com:Name xml:lang="en">Distribution of students in tertiary education by field of education</com:Name>
					<com:Name xml:lang="es">Distribución de estudiantes de educación terciaria  por campo de educación</com:Name>
					<com:Name xml:lang="fr">Répartition des étudiants de l'enseignement supérieur par domaines d'études</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FOSGP" id="FOSGP">
					<com:Name xml:lang="en">Distribution of graduates in tertiary education by field of education</com:Name>
					<com:Name xml:lang="es">Distribución de graduados de educación terciaria  por campo de educación</com:Name>
					<com:Name xml:lang="fr">Répartition des diplômés de l'enseignement supérieur par domaines d'études</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FEP" id="FEP">
					<com:Name xml:lang="en">Percentage of female students</com:Name>
					<com:Name xml:lang="es">Porcentaje de estudiantes mujeres</com:Name>
					<com:Name xml:lang="fr">Pourcentage d'étudiantes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FTP" id="FTP">
					<com:Name xml:lang="en">Percentage of female teachers</com:Name>
					<com:Name xml:lang="es">Porcentaje de docentes mujeres</com:Name>
					<com:Name xml:lang="fr">Pourcentage d'enseignantes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GRAD_ADP" id="GRAD_ADP">
					<com:Name xml:lang="en">Graduates from education programmes for adults</com:Name>
					<com:Name xml:lang="es">Graduados de programas de educación para adultos</com:Name>
					<com:Name xml:lang="fr">Diplômés d'un programme d'éducation pour adultes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GRAD_LITP" id="GRAD_LITP">
					<com:Name xml:lang="en">Participants that have completed a literacy programme</com:Name>
					<com:Name xml:lang="es">Participantes que han completado un programa  de alfabetización</com:Name>
					<com:Name xml:lang="fr">Participants ayant complété un programme d'alphabétisation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GTVP" id="GTVP">
					<com:Name xml:lang="en">Distribution of enrolment by orientation of education programme</com:Name>
					<com:Name xml:lang="es">Distribución de la matrícula por orientación del programa educativo</com:Name>
					<com:Name xml:lang="fr">Répartition des effectifs scolarisés par orientation de programme</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).OE" id="OE">
					<com:Name xml:lang="en">Outbound internationally mobile students</com:Name>
					<com:Name xml:lang="es">Estudiantes internacionalmente móviles hacia el extranjero</com:Name>
					<com:Name xml:lang="fr">Étudiants en mobilité internationale</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).PRP" id="PRP">
					<com:Name xml:lang="en">Percentage of private enrolment</com:Name>
					<com:Name xml:lang="es">Porcentaje de matrícula privada</com:Name>
					<com:Name xml:lang="fr">Pourcentage des effectifs de l’enseignement privé</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).REPP" id="REPP">
					<com:Name xml:lang="en">Percentage of repeaters</com:Name>
					<com:Name xml:lang="es">Porcentaje de repetidores</com:Name>
					<com:Name xml:lang="fr">Pourcentage de redoublants</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).REPR" id="REPR">
					<com:Name xml:lang="en">Repetition rate</com:Name>
					<com:Name xml:lang="es">Tasa de repetición</com:Name>
					<com:Name xml:lang="fr">Taux de redoublant</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ROFST_PHH" id="ROFST_PHH">
					<com:Name xml:lang="en">Rate of out-of-school children (household survey data)</com:Name>
					<com:Name xml:lang="es">Tasa de niños no escolarizados  (datos de encuestas de hogares)</com:Name>
					<com:Name xml:lang="fr">Taux d'enfants non scolarisés (données d'enquêtes auprès des ménages)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SCH_CENSUS" id="SCH_CENSUS">
					<com:Name xml:lang="en">School census</com:Name>
					<com:Name xml:lang="es">Censos escolares</com:Name>
					<com:Name xml:lang="fr">Recensement scolaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU_ADP" id="STU_ADP">
					<com:Name xml:lang="en">Enrolment in education programmes for adults</com:Name>
					<com:Name xml:lang="es">Matrícula en programas educativos para adultos</com:Name>
					<com:Name xml:lang="fr">Effectifs scolarisés dans les programmes d'éducation pour adultes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU_LITP" id="STU_LITP">
					<com:Name xml:lang="en">Participants in literacy programmes</com:Name>
					<com:Name xml:lang="es">Participantes en programas de alfabetización de adultos</com:Name>
					<com:Name xml:lang="fr">Participants aux programmes d'alphabétisation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TEP" id="TEP">
					<com:Name xml:lang="en">Distribution of students in tertiary education by ISCED level</com:Name>
					<com:Name xml:lang="es">Distribución de estudiantes en educación terciaria por  nivel CINE</com:Name>
					<com:Name xml:lang="fr">Répartition des étudiants de l'enseignement supérieur par niveaux de la CITE</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TRTEACH_GRAD" id="TRTEACH_GRAD">
					<com:Name xml:lang="en">Teacher training graduate</com:Name>
					<com:Name xml:lang="es">Graduado de programas de certificación docente</com:Name>
					<com:Name xml:lang="fr">Diplômés de programmes de formation initiale des enseignants</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ATTEND_FREQ" id="ATTEND_FREQ">
					<com:Name xml:lang="en">Attendance frequency</com:Name>
					<com:Name xml:lang="es">Frecuencia de asistencia</com:Name>
					<com:Name xml:lang="fr">Fréquentation des salles de cinéma</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).XUNIT" id="XUNIT">
					<com:Name xml:lang="en">Government expenditure per student</com:Name>
					<com:Name xml:lang="es">Gasto público por estudiante</com:Name>
					<com:Name xml:lang="fr">Dépenses des administrations publiques par étudiant</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).C_SITE_DIGIT" id="C_SITE_DIGIT">
					<com:Name xml:lang="en">Digital cinema site</com:Name>
					<com:Name xml:lang="es">Sala cinematográfica digital</com:Name>
					<com:Name xml:lang="fr">Site de cinéma numérique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).C_SCREEN" id="C_SCREEN">
					<com:Name xml:lang="en">Screen in cinema site</com:Name>
					<com:Name xml:lang="es">Pantallas en salas cinematográficas</com:Name>
					<com:Name xml:lang="fr">Écran dans le site de cinéma</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).C_SCREEN_DIGIT" id="C_SCREEN_DIGIT">
					<com:Name xml:lang="en">Screen in digital cinema site</com:Name>
					<com:Name xml:lang="es">Pantallas en salas cinematográficas digitales</com:Name>
					<com:Name xml:lang="fr">Écran dans le site de cinéma numérique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).C_SEAT_R_C_SCREEN" id="C_SEAT_R_C_SCREEN">
					<com:Name xml:lang="en">Number of seats per screen</com:Name>
					<com:Name xml:lang="es">Número de butacas por pantalla</com:Name>
					<com:Name xml:lang="fr">Nombre de fauteuils par écran</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).C_SEAT" id="C_SEAT">
					<com:Name xml:lang="en">Seat in cinema site</com:Name>
					<com:Name xml:lang="es">Butacas en salas cinematográficas</com:Name>
					<com:Name xml:lang="fr">Fauteuil dans le site de cinéma</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GOV_EXP" id="GOV_EXP">
					<com:Name xml:lang="en">Government expenditure</com:Name>
					<com:Name xml:lang="es">Gasto gubernamental</com:Name>
					<com:Name xml:lang="fr">Dépenses des administrations publiques</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).POP_RUR" id="POP_RUR">
					<com:Name xml:lang="en">Rural population</com:Name>
					<com:Name xml:lang="es">Población rural</com:Name>
					<com:Name xml:lang="fr">Population rurale</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).IMR" id="IMR">
					<com:Name xml:lang="en">Infant mortality rate</com:Name>
					<com:Name xml:lang="es">Tasa de mortalidad infantil</com:Name>
					<com:Name xml:lang="fr">Taux de mortalité infantile</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).LIFE_EXP" id="LIFE_EXP">
					<com:Name xml:lang="en">Life expectancy at birth</com:Name>
					<com:Name xml:lang="es">Esperanza de vida al nacer</com:Name>
					<com:Name xml:lang="fr">Espérance de vie à la naissance</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FR" id="FR">
					<com:Name xml:lang="en">Fertility rate</com:Name>
					<com:Name xml:lang="es">Tasa de fecundidad</com:Name>
					<com:Name xml:lang="fr">Taux de fertilité</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).PREV_HIV" id="PREV_HIV">
					<com:Name xml:lang="en">Prevalence of HIV</com:Name>
					<com:Name xml:lang="es">Prevalencia del VIH</com:Name>
					<com:Name xml:lang="fr">Prévalence du VIH</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).POP_GROWTH" id="POP_GROWTH">
					<com:Name xml:lang="en">Population growth</com:Name>
					<com:Name xml:lang="es">Crecimiento de la población</com:Name>
					<com:Name xml:lang="fr">Croissance de la population</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GDP_GROWTH" id="GDP_GROWTH">
					<com:Name xml:lang="en">GDP growth</com:Name>
					<com:Name xml:lang="es">Crecimiento del PIB</com:Name>
					<com:Name xml:lang="fr">Croissance du PIB</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).PHR_USD310" id="PHR_USD310">
					<com:Name xml:lang="en">Poverty headcount ratio at $3.10 a day</com:Name>
					<com:Name xml:lang="es">Índice de recuento de pobreza en base a 3,10 USD diarios</com:Name>
					<com:Name xml:lang="fr">Ratio de la population pauvre disposant de moins de $ 3.10 par jour</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).PHR_USD190" id="PHR_USD190">
					<com:Name xml:lang="en">Poverty headcount ratio at $1.90 a day</com:Name>
					<com:Name xml:lang="es">Índice de recuento de pobreza en base a 1,90 USD diario</com:Name>
					<com:Name xml:lang="fr">Ratio de la population pauvre disposant de moins de $ 1.90 par jour</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ECDP" id="ECDP">
					<com:Name xml:lang="en">Percentage of new entrants to Grade 1 of primary education with early childhood education experience</com:Name>
					<com:Name xml:lang="es">Porcentaje de nuevos ingresos al 1er grado de educación primaria con experiencia previa en educación de  la primera infancia</com:Name>
					<com:Name xml:lang="fr">Pourcentage de nouveaux inscrits en 1ère année de l'enseignement primaire ayant une expérience d’éducation de la petite enfance</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ADULT_SUPPORT" id="ADULT_SUPPORT">
					<com:Name xml:lang="en">Children with whom an adult has engaged in activities to promote learning and school readiness</com:Name>
					<com:Name xml:lang="es">Participación en actividades para promover el aprendizaje y la preparación escolar</com:Name>
					<com:Name xml:lang="fr">Enfants avec lesquels un adulte a exercé des activités qui favorisent l'apprentissage et la préparation à l'école</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).CHILD_BOOK" id="CHILD_BOOK">
					<com:Name xml:lang="en">Child who have three or more children's books at home</com:Name>
					<com:Name xml:lang="es">Tener tres o más libros para niños en casa</com:Name>
					<com:Name xml:lang="fr">Enfant qui a trois livres d'enfants ou plus à la maison</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).PLAY_THINGS" id="PLAY_THINGS">
					<com:Name xml:lang="en">Children with two or more playthings at home</com:Name>
					<com:Name xml:lang="es">Tener dos o más juguetes en casa</com:Name>
					<com:Name xml:lang="fr">Enfants avec deux jouets ou plus à la maison</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).INADEQUATE_CARE" id="INADEQUATE_CARE">
					<com:Name xml:lang="en">Children left alone or in the care of another child younger than 10 years old</com:Name>
					<com:Name xml:lang="es">Dejado solo o bajo el cuidado de otro niño menor de 10 años</com:Name>
					<com:Name xml:lang="fr">Enfants laissés seuls ou pris en charge par un autre enfant de moins de 10 ans</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ADMIN" id="ADMIN">
					<com:Name xml:lang="en">Administration</com:Name>
					<com:Name xml:lang="es">Administración</com:Name>
					<com:Name xml:lang="fr">Administration</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).BULLIED_STU" id="BULLIED_STU">
					<com:Name xml:lang="en">Bullied students</com:Name>
					<com:Name xml:lang="es">Estudiantes intimidados</com:Name>
					<com:Name xml:lang="fr">Élèves victimes d’intimidation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).CHILD_TRACK_T" id="CHILD_TRACK_T">
					<com:Name xml:lang="en">Children on track in health, learning and psychosocial well-being</com:Name>
					<com:Name xml:lang="es">Niños bien encaminados en salud, aprendizaje y bienestar psicosocial</com:Name>
					<com:Name xml:lang="fr">Enfants en bonne voie en matière de santé, d’apprentissage et bien-être psychosocial</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).CHILD_TRACK_HEALTH" id="CHILD_TRACK_HEALTH">
					<com:Name xml:lang="en">Children on track in health</com:Name>
					<com:Name xml:lang="es">Niños bien encaminados en salud</com:Name>
					<com:Name xml:lang="fr">Enfants en bonne voie en matière de santé</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).CHILD_TRACK_LEARN" id="CHILD_TRACK_LEARN">
					<com:Name xml:lang="en">Children on track in learning</com:Name>
					<com:Name xml:lang="es">Niños bien encaminados aprendizaje</com:Name>
					<com:Name xml:lang="fr">Enfants en bonne voie en matière d’apprentissage</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).CHILD_TRACK_PS_WB" id="CHILD_TRACK_PS_WB">
					<com:Name xml:lang="en">Children on track in psychosocial well-being</com:Name>
					<com:Name xml:lang="es">Niños bien encaminados en bienestar psicosocial</com:Name>
					<com:Name xml:lang="fr">Enfants en bonne voie en matière de bien-être psychosocial</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).COMP_EDU" id="COMP_EDU">
					<com:Name xml:lang="en">Compulsory education</com:Name>
					<com:Name xml:lang="es">Educación obligatoria</com:Name>
					<com:Name xml:lang="fr">Enseignement obligatoire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).CR" id="CR">
					<com:Name xml:lang="en">Completion rate</com:Name>
					<com:Name xml:lang="es">Tasa de finalización</com:Name>
					<com:Name xml:lang="fr">Taux d'achèvement</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).DIGIT_LIT" id="DIGIT_LIT">
					<com:Name xml:lang="en">Digital literacy</com:Name>
					<com:Name xml:lang="es">Competencia en alfabetización digital</com:Name>
					<com:Name xml:lang="fr">Culture numérique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FREE_EDU" id="FREE_EDU">
					<com:Name xml:lang="en">Free education</com:Name>
					<com:Name xml:lang="es">Educación gratuita</com:Name>
					<com:Name xml:lang="fr">Enseignement gratuit</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ICT_SKILL_COPY" id="ICT_SKILL_COPY">
					<com:Name xml:lang="en">Youth and adults who have copied or moved a file or folder</com:Name>
					<com:Name xml:lang="es">Jóvenes y adultos que han copiado o movido un archivo o carpeta</com:Name>
					<com:Name xml:lang="fr">Jeunes et adultes qui ont copié ou déplacé un fichier ou un dossier</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ICT_SKILL_CONNECT" id="ICT_SKILL_CONNECT">
					<com:Name xml:lang="en">Youth and adults who have connected and installed new devices</com:Name>
					<com:Name xml:lang="es">Jóvenes y adultos que han conectado e instalado nuevos dispositivos</com:Name>
					<com:Name xml:lang="fr">Jeunes et adultes qui ont connecté et installé de nouveaux appareils</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ICT_SKILL_CREATE" id="ICT_SKILL_CREATE">
					<com:Name xml:lang="en">Youth and adults who have created electronic presentations with presentation software</com:Name>
					<com:Name xml:lang="es">Jóvenes y adultos que han creado presentaciones electrónicas con software de presentación</com:Name>
					<com:Name xml:lang="fr">Jeunes et adultes qui ont créé des présentations électroniques avec un logiciel de présentation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NODA" id="NODA">
					<com:Name xml:lang="en">Net official development assistance</com:Name>
					<com:Name xml:lang="es">Asistencia neta oficial al desarrollo</com:Name>
					<com:Name xml:lang="fr">Aide nette publique au développement</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU_NATIVE" id="STU_NATIVE">
					<com:Name xml:lang="en">Children and young people who have no immigrant background</com:Name>
					<com:Name xml:lang="es">Niños y jóvenes que no tienen antecedentes de inmigrantes</com:Name>
					<com:Name xml:lang="fr">Enfants et jeunes qui n'ont pas d'origine immigrée</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU_NON_NATIVE" id="STU_NON_NATIVE">
					<com:Name xml:lang="en">Children and young people who have an immigrant background</com:Name>
					<com:Name xml:lang="es">Niños y jóvenes de origen inmigrante</com:Name>
					<com:Name xml:lang="fr">Enfants et jeunes issus de l'immigration</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU_HIGH_SEB" id="STU_HIGH_SEB">
					<com:Name xml:lang="en">Children and young people who are from very affluent socioeconomic backgrounds</com:Name>
					<com:Name xml:lang="es">Los niños y los jóvenes de origen socioeconómico muy rico</com:Name>
					<com:Name xml:lang="fr">Enfants et jeunes issus de milieux socioéconomiques très aisés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU_LOW_SEB" id="STU_LOW_SEB">
					<com:Name xml:lang="en">Children and young people who are from very poor socioeconomic backgrounds</com:Name>
					<com:Name xml:lang="es">Los niños y los jóvenes de origen socioeconómico muy pobre</com:Name>
					<com:Name xml:lang="fr">Enfants et jeunes issus de milieux socio-économiques très pauvres</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU_LANG_TEST" id="STU_LANG_TEST">
					<com:Name xml:lang="en">Children and young people who spoke the language of the test at home</com:Name>
					<com:Name xml:lang="es">Niños y jóvenes que no hablaban el idioma de la prueba en casa</com:Name>
					<com:Name xml:lang="fr">Enfants et jeunes qui parlent la langue du test à la maison</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU_NON_LANG_TEST" id="STU_NON_LANG_TEST">
					<com:Name xml:lang="en">Children and young people who did not speak the language of the test at home</com:Name>
					<com:Name xml:lang="es">Niños y jóvenes que no hablaban el idioma de la prueba en casa</com:Name>
					<com:Name xml:lang="fr">Enfants et jeunes qui ne parlent pas la langue du test à la maison</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).ODA" id="ODA">
					<com:Name xml:lang="en">Official development assistance</com:Name>
					<com:Name xml:lang="es">Asistencia oficial al desarrollo</com:Name>
					<com:Name xml:lang="fr">Aide publique au développement</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FUNCT_LIT" id="FUNCT_LIT">
					<com:Name xml:lang="en">Functional literacy</com:Name>
					<com:Name xml:lang="es">Competencia en alfabetización funcional</com:Name>
					<com:Name xml:lang="fr">Fonctionnelle en écriture et en lecture</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).FUNCT_NUM" id="FUNCT_NUM">
					<com:Name xml:lang="en">Functional numeracy</com:Name>
					<com:Name xml:lang="es">Competencia en habilidades numéricas funcionales</com:Name>
					<com:Name xml:lang="fr">Fonctionnelle en calcul</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).STU_UND_SUST" id="STU_UND_SUST">
					<com:Name xml:lang="en">Students showing adequate understanding of issues relating to global citizenship and sustainability</com:Name>
					<com:Name xml:lang="es">Estudiantes que muestran una comprensión adecuada en temas relativos a la ciudadanía mundial y la sostenibilidad</com:Name>
					<com:Name xml:lang="fr">Elèves manifestant une bonne compréhension des questions relatives à la citoyenneté mondiale et au développement durable</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).TRTP" id="TRTP">
					<com:Name xml:lang="en">Percentage of trained teachers</com:Name>
					<com:Name xml:lang="es">Porcentaje de docentes certificados</com:Name>
					<com:Name xml:lang="fr">Pourcentage d’enseignants formés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).QUTP" id="QUTP">
					<com:Name xml:lang="en">Percentage of qualified teachers</com:Name>
					<com:Name xml:lang="es">Porcentaje de docentes calificados</com:Name>
					<com:Name xml:lang="fr">Pourcentage d'enseignants qualifiés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SU_451" id="SU_451">
					<com:Name xml:lang="en">Target451</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SU_452" id="SU_452">
					<com:Name xml:lang="en">Target452</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SU_453" id="SU_453">
					<com:Name xml:lang="en">Target453</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SU_471" id="SU_471">
					<com:Name xml:lang="en">Target471</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SU_472" id="SU_472">
					<com:Name xml:lang="en">Target472</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SU_473" id="SU_473">
					<com:Name xml:lang="en">Target473</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SU_4a1a" id="SU_4a1a">
					<com:Name xml:lang="en">Target4a1a</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SU_4b2" id="SU_4b2">
					<com:Name xml:lang="en">Target4b2</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SU_4c5" id="SU_4c5">
					<com:Name xml:lang="en">Target4c5</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).SU_4c7" id="SU_4c7">
					<com:Name xml:lang="en">Target4c7</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).GENTR" id="GENTR">
					<com:Name xml:lang="en">Gross entry ratio</com:Name>
					<com:Name xml:lang="es">Tasa bruta de ingreso</com:Name>
					<com:Name xml:lang="fr">Taux brut d'accès</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_STAT_UNIT(1.0).NENTR" id="NENTR">
					<com:Name xml:lang="en">Net entry rate</com:Name>
					<com:Name xml:lang="es">Tasa neta de ingreso</com:Name>
					<com:Name xml:lang="fr">Taux net d'accès</com:Name>
				</str:Code>
			</str:Codelist>
			<str:Codelist urn="urn:sdmx:org.sdmx.infomodel.codelist.Codelist=UNESCO:CL_UNIT(1.0)" isExternalReference="false" agencyID="UNESCO" id="CL_UNIT" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Unit of measure</com:Name>
				<com:Name xml:lang="es">Medición</com:Name>
				<com:Name xml:lang="fr">Unité de mesure</com:Name>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PER" id="PER">
					<com:Name xml:lang="es">Número de personas</com:Name>
					<com:Name xml:lang="en">Number of persons</com:Name>
					<com:Name xml:lang="fr">Nombre de personnes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).FTE" id="FTE">
					<com:Name xml:lang="en">Full-time equivalent</com:Name>
					<com:Name xml:lang="es">Equivalente de jornada completa</com:Name>
					<com:Name xml:lang="fr">Equivalent temps plein</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).HR_WEEK" id="HR_WEEK">
					<com:Name xml:lang="en">Average number of hours worked per week</com:Name>
					<com:Name xml:lang="es">Promedio de horas semanales trabajadas</com:Name>
					<com:Name xml:lang="fr">Nombre moyen d'heures travaillées par semaine</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).USD" id="USD">
					<com:Name xml:lang="en">US dollar</com:Name>
					<com:Name xml:lang="es">Dólar estadounidense</com:Name>
					<com:Name xml:lang="fr">Dollar des EU</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT" id="PT">
					<com:Name xml:lang="en">Percentage</com:Name>
					<com:Name xml:lang="es">Porcentaje</com:Name>
					<com:Name xml:lang="fr">Pourcentage</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).YR" id="YR">
					<com:Name xml:lang="es">Años</com:Name>
					<com:Name xml:lang="en">Years</com:Name>
					<com:Name xml:lang="fr">Années</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).GNI" id="GNI">
					<com:Name xml:lang="en">as % of GNI</com:Name>
					<com:Name xml:lang="es">como % del ingreso nacional bruto (INB)</com:Name>
					<com:Name xml:lang="fr">en % du RNB</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PPP" id="PPP">
					<com:Name xml:lang="en">Purchasing power parity</com:Name>
					<com:Name xml:lang="es">Paridad del poder adquisitivo</com:Name>
					<com:Name xml:lang="fr">Parité de pouvoir d'achat</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).NAC" id="NAC">
					<com:Name xml:lang="en">Local currency</com:Name>
					<com:Name xml:lang="es">Moneda local</com:Name>
					<com:Name xml:lang="fr">Monnaie locale</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).GR" id="GR">
					<com:Name xml:lang="en">Grade</com:Name>
					<com:Name xml:lang="es">Grado</com:Name>
					<com:Name xml:lang="fr">Année d’études</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).GPI" id="GPI">
					<com:Name xml:lang="en">Gender parity index</com:Name>
					<com:Name xml:lang="es">Índice de paridad de género</com:Name>
					<com:Name xml:lang="fr">Indice de parité entre les sexe</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).DSI" id="DSI">
					<com:Name xml:lang="en">Dissimilarity index</com:Name>
					<com:Name xml:lang="es">Índice de disimilitud</com:Name>
					<com:Name xml:lang="fr">Indice de dissimilarité</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).GDP_CAP" id="GDP_CAP">
					<com:Name xml:lang="en">as % of GDP per capita</com:Name>
					<com:Name xml:lang="es">como % del PIB per cápita</com:Name>
					<com:Name xml:lang="fr">en % du PIB par habitant</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).USD_CONST" id="USD_CONST">
					<com:Name xml:lang="en">Constant US $</com:Name>
					<com:Name xml:lang="es">Dólar estadounidense constante</com:Name>
					<com:Name xml:lang="fr">$ EU en valeur constante</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PPP_CONST" id="PPP_CONST">
					<com:Name xml:lang="es">PPA $ constante</com:Name>
					<com:Name xml:lang="en">Constant PPP $</com:Name>
					<com:Name xml:lang="fr">$ PPA en valeur constante</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP" id="PT_EMP">
					<com:Name xml:lang="en">as % of total employment</com:Name>
					<com:Name xml:lang="es">como % del empleo total</com:Name>
					<com:Name xml:lang="fr">en % du total de la population en emploi</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).NB" id="NB">
					<com:Name xml:lang="en">Number</com:Name>
					<com:Name xml:lang="es">Número</com:Name>
					<com:Name xml:lang="fr">Nombre</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).CAP_1000000POP" id="CAP_1000000POP">
					<com:Name xml:lang="en">Per million inhabitants</com:Name>
					<com:Name xml:lang="es">Per cápita (por cada 1.000.000 habitantes)</com:Name>
					<com:Name xml:lang="fr">Par million d'habitants</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).CAP_100000POP" id="CAP_100000POP">
					<com:Name xml:lang="en">Per hundred thousand inhabitants</com:Name>
					<com:Name xml:lang="es">Per cápita (por cada 100.000 habitantes)</com:Name>
					<com:Name xml:lang="fr">Par cent mille habitants</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).CAP_1000LF" id="CAP_1000LF">
					<com:Name xml:lang="en">Per thousand labour force</com:Name>
					<com:Name xml:lang="es">Per cápita (por cada 1.000 personas en la fuerza de trabajo)</com:Name>
					<com:Name xml:lang="fr">Par millier de la population active</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).CAP_1000EMP" id="CAP_1000EMP">
					<com:Name xml:lang="en">Per thousand total employment</com:Name>
					<com:Name xml:lang="es">Per cápita (por cada 1.000 empleados)</com:Name>
					<com:Name xml:lang="fr">Pour mille emplois</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_GERD" id="PT_GERD">
					<com:Name xml:lang="en">as % of total GERD</com:Name>
					<com:Name xml:lang="es">como % del GBID total</com:Name>
					<com:Name xml:lang="fr">en % du total de DIRD</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_RD_PS" id="PT_RD_PS">
					<com:Name xml:lang="en">as % of total R&amp;D personnel</com:Name>
					<com:Name xml:lang="es">como % del total de personal de I+D</com:Name>
					<com:Name xml:lang="fr">en % du personnel total de R-D</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_RES" id="PT_RES">
					<com:Name xml:lang="en">as % of total researchers</com:Name>
					<com:Name xml:lang="es">como % del total de investigadores</com:Name>
					<com:Name xml:lang="fr">en % du total des chercheurs</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_TEC" id="PT_TEC">
					<com:Name xml:lang="en">as % of total technicians</com:Name>
					<com:Name xml:lang="es">como % del total de personal técnico</com:Name>
					<com:Name xml:lang="fr">en % du total des techniciens</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_OTHER_STAFF" id="PT_OTHER_STAFF">
					<com:Name xml:lang="en">as % of total other supporting staff</com:Name>
					<com:Name xml:lang="es">como % del total de otro personal de apoyo</com:Name>
					<com:Name xml:lang="fr">en % du total d’autre personnel de soutien</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).GDP" id="GDP">
					<com:Name xml:lang="en">as % of GDP</com:Name>
					<com:Name xml:lang="es">como % del PIB</com:Name>
					<com:Name xml:lang="fr">en % du PIB</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).C_SCREEN_INDOOR" id="C_SCREEN_INDOOR">
					<com:Name xml:lang="en">Per indoor screen</com:Name>
					<com:Name xml:lang="es">Por pantalla en sala cinematográfica</com:Name>
					<com:Name xml:lang="fr">Par écran</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).CAP" id="CAP">
					<com:Name xml:lang="en">Per capita</com:Name>
					<com:Name xml:lang="es">Per cápita</com:Name>
					<com:Name xml:lang="fr">Par habitant</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).GOV_EXP_T" id="GOV_EXP_T">
					<com:Name xml:lang="en">as % of total government expenditure (all sectors)</com:Name>
					<com:Name xml:lang="es">como % del gasto público total (todos los sectores)</com:Name>
					<com:Name xml:lang="fr">en % du total des dépenses des administrations publiques (tous secteurs)</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).GOV_EXP_EDU" id="GOV_EXP_EDU">
					<com:Name xml:lang="en">as % of total government expenditure on education</com:Name>
					<com:Name xml:lang="es">como % del gasto público total  en educación</com:Name>
					<com:Name xml:lang="fr">en % des dépenses des administrations publiques pour l'éducation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).EXP_T" id="EXP_T">
					<com:Name xml:lang="en">as % of total expenditure</com:Name>
					<com:Name xml:lang="es">como % del gasto total</com:Name>
					<com:Name xml:lang="fr">en % du total des dépenses</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).CAP_PPP" id="CAP_PPP">
					<com:Name xml:lang="en">Per capita - current PPP $</com:Name>
					<com:Name xml:lang="es">Per cápita – PPA $ corriente</com:Name>
					<com:Name xml:lang="fr">Par habitant - $ PPA courante</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).CAP_PPP_CONST" id="CAP_PPP_CONST">
					<com:Name xml:lang="en">Per capita - constant PPP $</com:Name>
					<com:Name xml:lang="es">Per cápita – PPA $ constante</com:Name>
					<com:Name xml:lang="fr">Par habitant - $ PPA en valeur constante</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).RES_FTE_PPP" id="RES_FTE_PPP">
					<com:Name xml:lang="en">Per researcher (FTE) - current PPP $</com:Name>
					<com:Name xml:lang="es">Por investigador (EJC) - PPA $ corriente</com:Name>
					<com:Name xml:lang="fr">Par chercheur, EPT - $ PPA courante</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).RES_FTE_PPP_CONST" id="RES_FTE_PPP_CONST">
					<com:Name xml:lang="en">Per researcher (FTE) - constant PPP $</com:Name>
					<com:Name xml:lang="es">Por investigador (EJC) - PPA $ constante</com:Name>
					<com:Name xml:lang="fr">Par chercheur, EPT - $ PPA en valeur constante</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).RES_HC_PPP" id="RES_HC_PPP">
					<com:Name xml:lang="en">Per researcher (HC) - current PPP $</com:Name>
					<com:Name xml:lang="es">Por investigador (PF) - PPA $ corriente</com:Name>
					<com:Name xml:lang="fr">Par chercheur, PP - $ PPA courante</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).RES_HC_PPP_CONST" id="RES_HC_PPP_CONST">
					<com:Name xml:lang="en">Per researcher (HC) - constant PPP $</com:Name>
					<com:Name xml:lang="es">Por investigador (PF) - PPA $ constante</com:Name>
					<com:Name xml:lang="fr">Par chercheur, PP - $ PPA en valeur constante</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_AV_MEDIA" id="PT_EMP_AV_MEDIA">
					<com:Name xml:lang="en">as % of persons employed in audio-visual and interactive media</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en los medios audiovisuales e interactivos</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées dans l'audiovisuel et les médias interactifs</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_IND" id="PT_EMP_CULT_IND">
					<com:Name xml:lang="en">as % of persons employed in cultural industries</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en las industrias culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées qui travaillent dans l'industrie culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_IND_J_GT1" id="PT_EMP_CULT_IND_J_GT1">
					<com:Name xml:lang="en">as % of persons employed in cultural industries with more than one job</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en las industrias culturales en más de un empleo</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées dans l'industrie culturelle ayant plus d'un emploi</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_IND2" id="PT_EMP_CULT_IND2">
					<com:Name xml:lang="en">as % of persons holding a secondary job in cultural industries</com:Name>
					<com:Name xml:lang="es">como % de personas que desempeñan un segundo empleo en las industrias culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes dont le deuxième emploi est dans l'industrie culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_NH" id="PT_EMP_CULT_NH">
					<com:Name xml:lang="en">as % of persons employed in cultural and natural heritage</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en áreas asociadas con el patrimonio cultural y natural</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées dans le patrimoine culturel et naturel</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_OCC" id="PT_EMP_CULT_OCC">
					<com:Name xml:lang="en">as % of persons employed in cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en ocupaciones culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées qui ont une profession culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_OCC_FT" id="PT_EMP_CULT_OCC_FT">
					<com:Name xml:lang="en">as % of persons working full-time in cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas a jornada completa en ocupaciones culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes à temps plein qui ont une profession culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_OCC_J_GT1" id="PT_EMP_CULT_OCC_J_GT1">
					<com:Name xml:lang="en">as % of persons employed in cultural occupations with more than one job</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en ocupaciones culturales con más de un empleo</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées exerçant une profession culturelle ayant plus d'un emploi</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_OCC_PT" id="PT_EMP_CULT_OCC_PT">
					<com:Name xml:lang="en">as % of persons working part-time in cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas a jornada parcial en ocupaciones culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes à temps partiel qui ont une profession culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_OCC_PERM" id="PT_EMP_CULT_OCC_PERM">
					<com:Name xml:lang="en">as % of regular workers in cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de asalariados regulares en ocupaciones culturales</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs réguliers qui ont une profession culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_OCC_SAL" id="PT_EMP_CULT_OCC_SAL">
					<com:Name xml:lang="en">as % of employees in cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en ocupaciones culturales</com:Name>
					<com:Name xml:lang="fr">en % de salariés qui ont une profession culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_OCC_SELF" id="PT_EMP_CULT_OCC_SELF">
					<com:Name xml:lang="en">as % of persons self-employed in cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de trabajadores independientes en ocupaciones culturales</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs indépendants qui ont une profession culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_OCC_TEMP" id="PT_EMP_CULT_OCC_TEMP">
					<com:Name xml:lang="en">as % of temporary workers in cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en ocupaciones culturales</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires qui ont une profession culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_CULT_OCC2" id="PT_EMP_CULT_OCC2">
					<com:Name xml:lang="en">as % of persons holding a secondary job in cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de personas que desempeñan un empleo secundario en ocupaciones culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes dont la deuxième profession est culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_DESIGN" id="PT_EMP_DESIGN">
					<com:Name xml:lang="en">as % of persons employed in design and creative services</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en diseño y servicios creativos</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées dans le design et les services créatifs</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_EDU" id="PT_EMP_EDU">
					<com:Name xml:lang="en">as % of persons employed in education and training</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en educación y capacitación</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées dans l'enseignement et la formation culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_FT" id="PT_EMP_FT">
					<com:Name xml:lang="en">as % of persons working full-time</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas a jornada completa</com:Name>
					<com:Name xml:lang="fr">en % de personnes à temps plein</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_ICH" id="PT_EMP_ICH">
					<com:Name xml:lang="en">as % of persons employed in intangible cultural heritage</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en áreas asociadas con el patrimonio cultural inmaterial</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées dans le patrimoine culturel immatériel</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_J_GT1" id="PT_EMP_J_GT1">
					<com:Name xml:lang="en">as % of persons with more than one job</com:Name>
					<com:Name xml:lang="es">como % de personas con más de un trabajo</com:Name>
					<com:Name xml:lang="fr">en % de personnes qui ont plus d'un emploi</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_J1" id="PT_EMP_J1">
					<com:Name xml:lang="en">as % of persons with only one job</com:Name>
					<com:Name xml:lang="es">como % de personas con solo un trabajo</com:Name>
					<com:Name xml:lang="fr">en % de personnes n'ayant qu'un seul emploi</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_L01_02" id="PT_EMP_L01_02">
					<com:Name xml:lang="en">as % of total employment with no schooling</com:Name>
					<com:Name xml:lang="es">como % del empleo total de personas sin escolarización</com:Name>
					<com:Name xml:lang="fr">en % du total de la population en emploi qui n'ont aucune scolarisation</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_L03_1" id="PT_EMP_L03_1">
					<com:Name xml:lang="en">as % of total employment with some or completed primary education</com:Name>
					<com:Name xml:lang="es">como % del empleo total de personas con educación primara completa o incompleta</com:Name>
					<com:Name xml:lang="fr">en % du total de la population en emploi qui ont complété ou non l'enseignement primaire</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_L2T4" id="PT_EMP_L2T4">
					<com:Name xml:lang="en">as % of total employment with secondary or post-secondary non-tertiary education</com:Name>
					<com:Name xml:lang="es">como % del empleo total de personas con educación secundaria o postsecundaria no terciaria</com:Name>
					<com:Name xml:lang="fr">en % du total de la population en emploi qui ont complété l'enseignement secondaire ou post-secondaire non-supérieur</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_L5T8" id="PT_EMP_L5T8">
					<com:Name xml:lang="en">as % of total employment with tertiary education</com:Name>
					<com:Name xml:lang="es">como % del empleo total de personas con educación terciaria</com:Name>
					<com:Name xml:lang="fr">en % du total de la population en emploi qui ont complété l'enseignement supérieur</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_IND" id="PT_EMP_NON_CULT_IND">
					<com:Name xml:lang="en">as % of persons employed in non-cultural industries</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en industrias no culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées qui travaillent dans l'industrie non culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_IND_J_GT1" id="PT_EMP_NON_CULT_IND_J_GT1">
					<com:Name xml:lang="en">as % of persons employed in non cultural industries with more than one job</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en industrias no culturales con más de un empleo</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées qui travaillent dans l'industrie non culturelle ayant plus d'un emploi</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_IND2" id="PT_EMP_NON_CULT_IND2">
					<com:Name xml:lang="en">as % of persons holding a secondary job in non cultural industries</com:Name>
					<com:Name xml:lang="es">como % de personas que desempeñan un empleo secundario en industrias no culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes dont l'industrie du deuxième emploi est non culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_OCC" id="PT_EMP_NON_CULT_OCC">
					<com:Name xml:lang="en">as % of persons employed in non cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en ocupaciones no culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées qui ont une profession non culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_OCC_FT" id="PT_EMP_NON_CULT_OCC_FT">
					<com:Name xml:lang="en">as % of persons working full-time in non cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas a jornada completa ocupaciones no culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes à temps plein qui ont une profession non culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_OCC_J_GT1" id="PT_EMP_NON_CULT_OCC_J_GT1">
					<com:Name xml:lang="en">as % of persons employed in non cultural occupations with more than one job</com:Name>
					<com:Name xml:lang="es">como % de personas con más de un empleo empleadas a jornada parcial en ocupaciones no culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées exerçant une profession non culturelle ayant plus d'un emploi</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_OCC_PT" id="PT_EMP_NON_CULT_OCC_PT">
					<com:Name xml:lang="en">as % of persons working part-time in non cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas a jornada parcial en ocupaciones no culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes à temps partiel qui ont une profession non culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_OCC_PERM" id="PT_EMP_NON_CULT_OCC_PERM">
					<com:Name xml:lang="en">as % of regular workers in non cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de asalariados regulares en ocupaciones no culturales</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs réguliers qui ont une profession non culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_OCC_SAL" id="PT_EMP_NON_CULT_OCC_SAL">
					<com:Name xml:lang="en">as % of employees in non cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de asalariados en ocupaciones no culturales</com:Name>
					<com:Name xml:lang="fr">en % de salariés qui ont une profession non culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_OCC_SELF" id="PT_EMP_NON_CULT_OCC_SELF">
					<com:Name xml:lang="en">as % of persons self-employed in non cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de trabajadores independientes en ocupaciones no culturales</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs indépendants qui ont une profession non culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_OCC_TEMP" id="PT_EMP_NON_CULT_OCC_TEMP">
					<com:Name xml:lang="en">as % of temporary workers in non cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en ocupaciones no culturales</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires qui ont une profession non culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_NON_CULT_OCC2" id="PT_EMP_NON_CULT_OCC2">
					<com:Name xml:lang="en">as % of persons holding a secondary job in non cultural occupations</com:Name>
					<com:Name xml:lang="es">como % de personas que desempeñan un empleo secundario en ocupaciones no culturales</com:Name>
					<com:Name xml:lang="fr">en % de personnes dont la profession du deuxième emploi est non culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_PERF" id="PT_EMP_PERF">
					<com:Name xml:lang="en">as % of persons employed in performance and celebration</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en presentaciones artísticas y celebraciones</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées dans les arts de la scène et festivités</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_PRINT" id="PT_EMP_PRINT">
					<com:Name xml:lang="en">as % of persons employed in books and press</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en el área de libros y prensa</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées avec les livres et la presse</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_PT" id="PT_EMP_PT">
					<com:Name xml:lang="en">as % of persons working part-time</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas a jornada parcial</com:Name>
					<com:Name xml:lang="fr">en % de personnes à temps partiel</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_PERM" id="PT_EMP_PERM">
					<com:Name xml:lang="en">as % of regular workers</com:Name>
					<com:Name xml:lang="es">como % de asalariados regulares</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs réguliers</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_SAL" id="PT_EMP_SAL">
					<com:Name xml:lang="en">as % of employees</com:Name>
					<com:Name xml:lang="es">como % de los empleados</com:Name>
					<com:Name xml:lang="fr">en % de salariés</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_SELF" id="PT_EMP_SELF">
					<com:Name xml:lang="en">as % of persons self-employed</com:Name>
					<com:Name xml:lang="es">como % de trabajadores independientes</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs indépendants</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_TEMP" id="PT_EMP_TEMP">
					<com:Name xml:lang="en">as % of temporary workers</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en los medios audiovisuales e interactivos</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_V_ARTS" id="PT_EMP_V_ARTS">
					<com:Name xml:lang="en">as % of persons employed in visual arts and crafts</com:Name>
					<com:Name xml:lang="es">como % de personas empleadas en artes visuales y artesanías</com:Name>
					<com:Name xml:lang="fr">en % de personnes employées dans les arts visuels et l'artisanat</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_Y_GE65" id="PT_EMP_Y_GE65">
					<com:Name xml:lang="en">as % of total employment, 65 and over</com:Name>
					<com:Name xml:lang="es">como % del empleo total de personas de 65 años o más</com:Name>
					<com:Name xml:lang="fr">en % du total de la population en emploi âgée de 65 et plus</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_Y15T24" id="PT_EMP_Y15T24">
					<com:Name xml:lang="en">as % of total employment, 15-24 years old</com:Name>
					<com:Name xml:lang="es">como % del empleo total de personas entre 15 y 24 años de edad</com:Name>
					<com:Name xml:lang="fr">en % du total de la population en emploi âgée de 15 à 24 ans</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_Y25T64" id="PT_EMP_Y25T64">
					<com:Name xml:lang="en">as % of total employment, 25-64 years old</com:Name>
					<com:Name xml:lang="es">como % del empleo total de personas entre 25 y 64 años de edad</com:Name>
					<com:Name xml:lang="fr">en % du total de la population en emploi âgée de 25 à 64 ans</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_TEMP_AV_MEDIA" id="PT_EMP_TEMP_AV_MEDIA">
					<com:Name xml:lang="en">as % of temporary workers in audio-visual and interactive media</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en los medios audiovisuales e interactivos</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires dans l'audiovisuel et les médias interactifs</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_TEMP_CULT_NH" id="PT_EMP_TEMP_CULT_NH">
					<com:Name xml:lang="en">as % of temporary workers in cultural and natural heritage</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en el área del patrimonio cultural y natural</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires dans le patrimoine culturel et naturel</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_TEMP_DESIGN" id="PT_EMP_TEMP_DESIGN">
					<com:Name xml:lang="en">as % of temporary workers in design and creative services</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en diseño y servicios creativos</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires dans le design et les services créatifs</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_TEMP_EDU" id="PT_EMP_TEMP_EDU">
					<com:Name xml:lang="en">as % of temporary workers in education and training</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en educación y capacitación</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires dans l'enseignement et la formation culturelle</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_TEMP_ICH" id="PT_EMP_TEMP_ICH">
					<com:Name xml:lang="en">as % of temporary workers in intangible cultural heritage</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en el área del patrimonio cultural inmaterial</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires dans le patrimoine culturel immatériel</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_TEMP_PERF" id="PT_EMP_TEMP_PERF">
					<com:Name xml:lang="en">as % of temporary workers in performance and celebration</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en presentaciones artísticas y celebraciones</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires dans les arts de la scène et festivités</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_TEMP_PRINT" id="PT_EMP_TEMP_PRINT">
					<com:Name xml:lang="en">as % of temporary workers in books and press</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en el área libros y prensa</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires avec les livres et la presse</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_EMP_TEMP_V_ARTS" id="PT_EMP_TEMP_V_ARTS">
					<com:Name xml:lang="en">as % of temporary workers in visual arts and crafts</com:Name>
					<com:Name xml:lang="es">como % de asalariados temporales en artes visuales y artesanías</com:Name>
					<com:Name xml:lang="fr">en % de travailleurs temporaires dans les arts visuels et l'artisanat</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).LB_1000" id="LB_1000">
					<com:Name xml:lang="en">Per 1,000 live births</com:Name>
					<com:Name xml:lang="es">Por cada 1.000 nacidos vivos</com:Name>
					<com:Name xml:lang="fr">Par 1 000 naissances vivantes</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_ANNUAL" id="PT_ANNUAL">
					<com:Name xml:lang="en">annual %</com:Name>
					<com:Name xml:lang="es">% anual</com:Name>
					<com:Name xml:lang="fr">% annuel</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).BIRTH_R_WOMEN" id="BIRTH_R_WOMEN">
					<com:Name xml:lang="en">Births per woman</com:Name>
					<com:Name xml:lang="es">Nacimientos por cada mujer</com:Name>
					<com:Name xml:lang="fr">Naissances par femme</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_POP_Y15T49" id="PT_POP_Y15T49">
					<com:Name xml:lang="en">as % of population aged 15-49</com:Name>
					<com:Name xml:lang="es">como % de la población entre los 15 y 49 años de edad</com:Name>
					<com:Name xml:lang="fr">en % de la population totale âgée de 15 à 49 ans</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_POP" id="PT_POP">
					<com:Name xml:lang="en">as % of total population</com:Name>
					<com:Name xml:lang="es">como % de la población total</com:Name>
					<com:Name xml:lang="fr">en % de la population totale</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).PT_ODA" id="PT_ODA">
					<com:Name xml:lang="en">as % of total ODA</com:Name>
					<com:Name xml:lang="es">como % de la AOD total</com:Name>
					<com:Name xml:lang="fr">en % du total d’APO</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).GLPI" id="GLPI">
					<com:Name xml:lang="en">Geographic location parity index</com:Name>
					<com:Name xml:lang="es">Índice de paridad de ubicación geográfica</com:Name>
					<com:Name xml:lang="fr">Indice de parité géographique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).SESPI" id="SESPI">
					<com:Name xml:lang="en">Socio-economic status parity index</com:Name>
					<com:Name xml:lang="es">Índice de paridad del estado socioeconómico</com:Name>
					<com:Name xml:lang="fr">Indice de parité de statut socio-économique</com:Name>
				</str:Code>
				<str:Code urn="urn:sdmx:org.sdmx.infomodel.codelist.Code=UNESCO:CL_UNIT(1.0).IPI" id="IPI">
					<com:Name xml:lang="en">Immigration parity index</com:Name>
					<com:Name xml:lang="es">Índice de paridad de inmigración</com:Name>
					<com:Name xml:lang="fr">Indice de parité de l'immigration</com:Name>
				</str:Code>
			</str:Codelist>
		</str:Codelists>
		<str:Concepts>
			<str:ConceptScheme urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.ConceptScheme=SDMX:CROSS_DOMAIN_CONCEPTS(1.0)" isExternalReference="false" agencyID="SDMX" id="CROSS_DOMAIN_CONCEPTS" isFinal="true" version="1.0">
				<com:Name xml:lang="en">SDMX Cross Domain Concept Scheme</com:Name>
				<com:Name xml:lang="fr">Cross Domain Concepts</com:Name>
				<com:Description xml:lang="en">Cross-domain concepts in the SDMX framework describe concepts relevant to many, if not all, statistical domains. SDMX recommends using these concepts whenever feasible in SDMX structures and messages to promote re-usability and exchange of statistical information and their related metadata between organizations. Whenever used, these concepts should conform to the specified names, roles, and representations defined in the SDMX Content-Oriented Guidelines.</com:Description>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).ACCESSIBILITY" id="ACCESSIBILITY">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Accessibility refers to the availability of statistical information to the user. It includes the ease with which the existence of information can be ascertained, as well as the suitability of the form or medium through which the information can be accessed. The cost of the information may also be an aspect of accessibility for some users.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Accessibility</com:Name>
					<com:Description xml:lang="en">The ease and the conditions under which statistical information can be obtained.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).ACCURACY" id="ACCURACY">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The accuracy of statistical information is the degree to which the information correctly describes the phenomena. It is usually characterized in terms of error in statistical estimates and is often decomposed into bias (systematic error) and variance (random error) components. Accuracy can contain either measures of accuracy (numerical results of the methods for assessing the accuracy of data) or qualitative assessment indicators. It may also be described in terms of the major sources of error that potentially cause inaccuracy (e.g., coverage, sampling, non response, response error). Accuracy is associated with the "reliability" of the data, which is defined as the closeness of the initial estimated value to the subsequent estimated value.
This concept can be broken down into: "Accuracy - overall" (summary assessment); "Accuracy - non-sampling error"; "Accuracy - sampling error".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Accuracy</com:Name>
					<com:Description xml:lang="en">Closeness of computations or estimates to the exact or true values that the statistics were intended to measure.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).ACCURACY_OVERALL" id="ACCURACY_OVERALL">
					<com:Name xml:lang="en">Accuracy - overall</com:Name>
					<com:Description xml:lang="en">Assessment of accuracy, linked to a certain data set or domain, which is summarising the various components into one single measure.</com:Description>
					<str:Parent>
						<Ref id="ACCURACY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).NONSAMPLING_ERR" id="NONSAMPLING_ERR">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Non-sampling errors may arise from many different sources such as defects in the sampling frame, faulty demarcation of sample units, defects in the selection of sample units, mistakes in the collection of data due to personal variations, misunderstanding, bias, negligence or dishonesty on the part of the investigator or of the interviewer, mistakes at the stage of the processing of the data, etc.
Non- sampling errors may be categorised as:
- Coverage errors (or frame errors) due to divergences between the target population and the frame population ;
- Measurement errors occurring during data collection;
- Non-response errors caused by no data collected for a population unit or for some survey variables;
- Processing errors due to errors introduced during data entry, data editing, sometimes coding and imputation;
- Model assumption errors.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Accuracy - non-sampling error</com:Name>
					<com:Description xml:lang="en">Error in sample estimates which cannot be attributed to sampling fluctuations.</com:Description>
					<str:Parent>
						<Ref id="ACCURACY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).SAMPLING_ERR" id="SAMPLING_ERR">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Sampling errors are distinct from errors due to imperfect selection, bias in response or estimation, errors of observation and recording, etc.
For probability sampling, the random variation due to sampling can be calculated. For non-probability sampling, random errors cannot be calculated without reference to some kind of model. The totality of sampling errors in all possible samples of the same size generates the sampling distribution of the statistic which is being used to estimate the parent value.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Accuracy - sampling error</com:Name>
					<com:Description xml:lang="en">That part of the difference between a population value and an estimate thereof, derived from a random sample, which is due to the fact that only a subset of the population is enumerated.</com:Description>
					<str:Parent>
						<Ref id="ACCURACY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).ADJUSTMENT" id="ADJUSTMENT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Adjustments may be associated with changes in definitions, exchange rates, prices, seasons and other factors. Adjustments are in particular applied to compile consistent time series, but the concept is also used for describing adjustments related to other types of data.
Adjustment can be distinguished from editing and imputation, in that before adjustment, the data are already of sufficient quality to be considered usable.
"Adjustment - coded" refers to the type of adjustment used, represented by a code, while "Adjustment - detail" refers to the textual description of the type of adjustment used.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Adjustment</com:Name>
					<com:Description xml:lang="en">The set of procedures employed to modify statistical data to enable it to conform to national or international standards or to address data quality differences when compiling specific data sets.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).ADJUST_CODED" id="ADJUST_CODED">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">In data messages, adjustments are identified by a code related to the type of adjustment used, e.g. trading day adjustment, working day adjustment, seasonal adjustment or trend-cycle adjustment.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Adjustment - coded</com:Name>
					<com:Description xml:lang="en">Type of adjustment used, represented by a code.</com:Description>
					<str:Parent>
						<Ref id="ADJUSTMENT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).ADJUST_DETAIL" id="ADJUST_DETAIL">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Adjustment - detail" can be used for presenting a textual explanation of the type of adjustment (e.g. working day adjustment, trading day adjustment, seasonal adjustment or trend-cycle adjustment) as well as the method used.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Adjustment - detail</com:Name>
					<com:Description xml:lang="en">Textual description of the type of adjustment used.</com:Description>
					<str:Parent>
						<Ref id="ADJUSTMENT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).AGE" id="AGE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Age" can be expressed as a number, e.g. 25 years old, or as a range, e.g. "between 25 and 29 years" or "6 to 11 months".
It is in general a coded concept.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Age</com:Name>
					<com:Name xml:lang="es">Años</com:Name>
					<com:Name xml:lang="fr">Age</com:Name>
					<com:Description xml:lang="en">The length of time that a person has lived or a thing has existed.</com:Description>
					<str:CoreRepresentation>
						<str:Enumeration>
							<Ref package="codelist" agencyID="SDMX" id="CL_AGE" version="1.0" class="Codelist" />
						</str:Enumeration>
					</str:CoreRepresentation>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).BASE_PER" id="BASE_PER">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The base period refers to the period when the published index is 100, or to which weights or base data refer to. It can be one single year (e.g. 1995=100) but it may be as short as one day or as long as the average of a number of years.  
"Base period" may include an indication of the value of the series in the base period (usually 1 or 100).</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Base Period</com:Name>
					<com:Description xml:lang="en">The period of time used as the base of an index number, or to which a constant price series refers.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CIVIL_STATUS" id="CIVIL_STATUS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The civil status is often referred to as marital status and represented through codes of the respective code list.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Civil status</com:Name>
					<com:Description xml:lang="en">Legal, conjugal status of each individual in relation to the marriage laws or customs of the country.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CLARITY" id="CLARITY">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Clarity is sometimes referred to as "interpretability". It refers to the data information environment: whether data are accompanied by appropriate metadata, including information on their quality, and the extent to which additional assistance is provided to users by data providers.
In the European Statistics Code of Practice, clarity is strictly associated to accessibility to form one single quality criteria: "accessibility and clarity".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Clarity</com:Name>
					<com:Description xml:lang="en">The extent to which easily comprehensible metadata are available, where these metadata are necessary to give a full understanding of statistical data.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CLASS_SYSTEM" id="CLASS_SYSTEM">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The definition entails the description of the classification being used and how this conforms to internationally agreed standards, guidelines, or good practices. It also refers to the description of deviations of the classification system compared to statistical standards, guidelines, or good practices, when relevant.
Examples of frequently used international classifications are ISCO (International Standard Classification of Occupations, maintained by the International Labour Organization), ISIC (International Standard Industrial Classification of All Economic Activities, maintained by the United Nations), NACE (Statistical Classification of Economic Activities, maintained by the European Union) and NUTS (Nomenclature of Territorial Units for Statistics, maintained by the European Union).</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Classification system</com:Name>
					<com:Description xml:lang="en">Arrangement or division of objects into groups based on characteristics which the objects have in common.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COHERENCE" id="COHERENCE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">When originating from different sources, and in particular from statistical surveys using different methodology, statistics are often not completely identical, but show differences in results due to different approaches, classifications and methodological standards. There are several areas where the assessment of coherence is regularly conducted: between provisional and final statistics, between annual and short-term statistics, between statistics from the same socio-economic domain, and between survey statistics and national accounts.
The concept of coherence is closely related to the concept of comparability between statistical domains. Both coherence and comparability refer to a data set with respect to another. The difference between the two is that comparability refers to comparisons between statistics based on usually unrelated statistical populations and coherence refers to comparisons between statistics for the same or largely similar populations. 
Coherence can be generally broken down into "Coherence - cross-domain" and "Coherence - internal".
Users should be aware that, in the Data Quality Assessment Framework of the International Monetary Fund, the term "consistency" is used for indicating "logical and numerical coherence". In that framework, "internal consistency" and "intersectoral and cross-domain consistency" can be mapped to "internal coherence" and "cross-domain coherence" respectively.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Coherence</com:Name>
					<com:Description xml:lang="en">Adequacy of statistics to be combined in different ways and for various uses.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COHER_X_DOM" id="COHER_X_DOM">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Differences in the statistical results calculated on the basis of different statistical domains, or surveys based on different methodologies (e.g. between annual and short-term statistics or between social statistics and national accounts) should be described.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Coherence - cross-domain</com:Name>
					<com:Description xml:lang="en">Extent to which statistics are reconcilable with those obtained through other data sources or statistical domains.</com:Description>
					<str:Parent>
						<Ref id="COHERENCE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COHER_INTERNAL" id="COHER_INTERNAL">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Differences in the statistical results calculated for the same statistical domain, based on stable or changing methodology (e.g. between provisional and final statistics or between different reference years showing break in series) should be described. Frequently, a group of statistics of a different type (in monetary value, in volume or constant price, price indicators, etc) measure the same phenomenon using different methodologies. For instance, statistics on employment, depending on whether they result from employers' declarations or household surveys do not lead exactly to the same results. However, there are often differences in the concepts used (de jure or de facto population, for instance), in the registration date, in the cif/fob registration for external trade, etc.  It is very important to check that these representations do not diverge too much in order to anticipate users' questions and for preparing corrective actions.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Coherence - internal</com:Name>
					<com:Description xml:lang="en">Extent to which statistics are consistent within a given data set.</com:Description>
					<str:Parent>
						<Ref id="COHERENCE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COMMENT" id="COMMENT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">In SDMX messages, a comment may contain a descriptive text which can be attached to an agency, provision agreement, dataflow, data set, group, time series, or observation.
A list of ID broken down by attachment level is therefore needed: COMMENT_AGENCY, COMMENT_AGR, COMMENT_DFL, COMMENT_DSET, COMMENT_GRP,  COMMENT_TS, COMMENT_OBS.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Comment</com:Name>
					<com:Description xml:lang="en">Supplementary descriptive text which can be attached to data or metadata.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COMPARABILITY" id="COMPARABILITY">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Comparability aims at measuring the impact of differences in applied statistical concepts and definitions on the comparison of statistics between geographical areas, non-geographical dimensions, or over time. Comparability of statistics, i.e. their usefulness in drawing comparisons and contrast among different populations, is a complex concept, difficult to assess in precise or absolute terms. In general terms, it means that statistics for different populations can be legitimately aggregated, compared and interpreted in relation to each other or against some common standard. Metadata must convey such information that will help any interested party in evaluating comparability of the data, which is the result of a multitude of factors.
In some quality frameworks, e.g. the European Statistics Code of Practice, comparability is strictly associated with the coherence of statistics.
The concept can be further broken down into:
(a) Comparability - geographical, referring to the degree of comparability between statistics measuring the same phenomenon for different geographical areas. 
(b) Comparability over time, referring to the degree of comparability between two or more instances of data on the same phenomenon measured at different points in time. 
(c) Comparability between domains, referring to the comparability between different survey results which target similar characteristics in different statistical domains.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Comparability</com:Name>
					<com:Description xml:lang="en">The extent to which differences between statistics can be attributed to differences between the true values of the statistical characteristics.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COMPAR_DOMAINS" id="COMPAR_DOMAINS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Comparability between domains refers to the comparability between different statistics which target similar characteristics in different statistical domains. Users frequently compare statistics from different domains, which are produced on the basis of different methodologies.
The difference in methodologies used for the estimation of the statistics should be reported. This concerns mainly the definition of statistical characteristics, the reference period, the definition of the statistical unit and the statistical measure.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Comparability - between domains</com:Name>
					<com:Description xml:lang="en">Extent to which statistics are comparable between different statistical domains.</com:Description>
					<str:Parent>
						<Ref id="COMPARABILITY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COMPAR_GEO" id="COMPAR_GEO">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Geographical comparability refers to the degree of comparability between similar survey results measuring the same phenomenon across geographical areas or regions. The surveys are in general conducted by different statistical agencies, referring to populations in different geographical areas, sometimes based on a harmonised methodology.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Comparability - geographical</com:Name>
					<com:Description xml:lang="en">Extent to which statistics are comparable between geographical areas.</com:Description>
					<str:Parent>
						<Ref id="COMPARABILITY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COMPAR_TIME" id="COMPAR_TIME">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Comparability over time refers to the degree of comparability between the results of two or several surveys related to the same domain, carried out by the same statistical agency.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Comparability - over time</com:Name>
					<com:Description xml:lang="en">Extent to which statistics are comparable or reconcilable over time.</com:Description>
					<str:Parent>
						<Ref id="COMPARABILITY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COMPILING_ORG" id="COMPILING_ORG">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The dimension is needed as two agencies might be compiling the exact same data but using different sources or concepts (the latter would be partially captured by the dimensions). The provider ID may be not sufficient, as one provider could disseminate the data compiled by different compiling agencies.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Compiling agency</com:Name>
					<com:Description xml:lang="en">The organisation compiling the data being reported.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONF" id="CONF">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Confidentiality refers to a property of data with respect to whether, for example, they are public or their disclosure is subject to restrictions. For instance, data allowing the identification of a physical or legal person, either directly or indirectly, may be characterised as confidential according to the relevant national or international legislation. Unauthorised disclosure of data that are restricted or confidential is not permitted and even legislative measures or other formal provisions may be used to prevent disclosure. Often, there are procedures in place to prevent disclosure of restricted or confidential data, including rules applying to staff, aggregation rules when disseminating data, provision of unit records, etc. 
Sensitivity (of information) is sometimes used as a synonym to confidentiality.
This concept can be broken down into: Confidentiality - policy; Confidentiality - status; Confidentiality - data treatment.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Confidentiality</com:Name>
					<com:Description xml:lang="en">A property of data indicating the extent to which their unauthorised disclosure could be prejudicial or harmful to the interest of the source or other relevant parties.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONF_DATA_TR" id="CONF_DATA_TR">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The rules applied when treating the data with regard to statistical confidentiality should be explained (e.g. aggregation rules when disseminating data, provision of unit records, etc.).</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Confidentiality - data treatment</com:Name>
					<com:Description xml:lang="en">Rules applied for treating the data set to ensure statistical confidentiality and prevent unauthorised disclosure.</com:Description>
					<str:Parent>
						<Ref id="CONF" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONF_POLICY" id="CONF_POLICY">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Textual description and references to legislation or other rules related to statistical confidentiality.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Confidentiality - policy</com:Name>
					<com:Description xml:lang="en">Legislative measures or other formal procedures which prevent unauthorised disclosure of data that identify a person or economic entity either directly or indirectly.</com:Description>
					<str:Parent>
						<Ref id="CONF" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONF_STATUS" id="CONF_STATUS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">This concept is related to data and determines the exact status of the value, i.e. if a specific value is confidential or not. This concept is always coded, i.e. it takes its value from the respective code list. 
A list of ID broken down by attachment level is recommended: CONF_STATUS_DFL (dataflow), CONF_STATUS_DSET (dataset), CONF_STATUS_GRP (group), CONF_STATUS_TS (series) or CONF_STATUS_OBS (observation).</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Confidentiality - status</com:Name>
					<com:Description xml:lang="en">Information about the confidentiality status of the object to which this attribute is attached.</com:Description>
					<str:Parent>
						<Ref id="CONF" />
					</str:Parent>
					<str:CoreRepresentation>
						<str:Enumeration>
							<Ref package="codelist" agencyID="SDMX" id="CL_CONF_STATUS" version="1.0" class="Codelist" />
						</str:Enumeration>
					</str:CoreRepresentation>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONTACT" id="CONTACT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Contact" describes contact points for the data or metadata, including how to reach the contact points. The main attributes of "contacts" are:
Contact mail address: The mailing address of the contact.
Contact name: The name of the contact.
Contact title: The name of the position held by the contact.
Contact email address: An e-mail address for correspondence with the contact.
Contact phone number: A telephone number for spoken correspondence.
Other detailed attributes (e.g. country code, city code, first name, family name, etc.) can be identified for the purpose of database storage.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Contact</com:Name>
					<com:Description xml:lang="en">Individual or organisational contact points for the data or metadata, including information on how to reach the contact points.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONTACT_EMAIL" id="CONTACT_EMAIL">
					<com:Name xml:lang="en">Contact email address</com:Name>
					<com:Description xml:lang="en">E-mail address of the contact points for the data or metadata.</com:Description>
					<str:Parent>
						<Ref id="CONTACT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONTACT_FAX" id="CONTACT_FAX">
					<com:Name xml:lang="en">Contact fax number</com:Name>
					<com:Description xml:lang="en">Fax number of the contact points for the data or metadata.</com:Description>
					<str:Parent>
						<Ref id="CONTACT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONTACT_MAIL" id="CONTACT_MAIL">
					<com:Name xml:lang="en">Contact mail address</com:Name>
					<com:Description xml:lang="en">The postal address of the contact points for the data or metadata.</com:Description>
					<str:Parent>
						<Ref id="CONTACT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONTACT_NAME" id="CONTACT_NAME">
					<com:Name xml:lang="en">Contact name</com:Name>
					<com:Description xml:lang="en">The name of the contact points for the data or metadata.</com:Description>
					<str:Parent>
						<Ref id="CONTACT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONTACT_ORGANISATION" id="CONTACT_ORGANISATION">
					<com:Name xml:lang="en">Contact organisation</com:Name>
					<com:Description xml:lang="en">The name of the organisation of the contact points for the data or metadata.</com:Description>
					<str:Parent>
						<Ref id="CONTACT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).ORGANISATION_UNIT" id="ORGANISATION_UNIT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">This contact refers to the contact point for data and metadata</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Contact organisation unit</com:Name>
					<com:Description xml:lang="en">An addressable subdivision of an organisation.</com:Description>
					<str:Parent>
						<Ref id="CONTACT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONTACT_FUNCT" id="CONTACT_FUNCT">
					<com:Name xml:lang="en">Contact person function</com:Name>
					<com:Description xml:lang="en">The area of technical responsibility of the contact, such as "methodology", "database management" or "dissemination".</com:Description>
					<str:Parent>
						<Ref id="CONTACT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CONTACT_PHONE" id="CONTACT_PHONE">
					<com:Name xml:lang="en">Contact phone number</com:Name>
					<com:Description xml:lang="en">The telephone number of the contact points for the data or metadata.</com:Description>
					<str:Parent>
						<Ref id="CONTACT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COST_BURDEN" id="COST_BURDEN">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The cost is associated with a statistical product and can be financial, human or time-related. It may consist of staff costs, data collection costs and other costs related to reporting obligations. 
The burden is often measured by costs for the respondents (businesses, institutions, households, individuals) imposed by a statistical obligation. The overall burden of delivering the information depends on: a) the number of respondents; b) the average time required to provide the information, including time spent after receipt of the questionnaire ("recontact time"); and c) the hourly cost of a respondent's time.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Cost and burden</com:Name>
					<com:Description xml:lang="en">Costs associated with the collection and production of a statistical product and burden on respondents.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COST_BURDEN_EFF" id="COST_BURDEN_EFF">
					<com:Name xml:lang="en">Cost and burden - efficiency management</com:Name>
					<com:Description xml:lang="en">Cost-benefit analysis, effectiveness of execution of medium term statistical programmes, and ensuring efficient use of resources.</com:Description>
					<str:Parent>
						<Ref id="COST_BURDEN" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COST_BURDEN_RES" id="COST_BURDEN_RES">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">It may include the contribution of respondent time in supplying information (burden) as a distinct subject under this heading.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Cost and burden - resources</com:Name>
					<com:Description xml:lang="en">Staff, facilities, computing resources, and financing to undertake statistical production.</com:Description>
					<str:Parent>
						<Ref id="COST_BURDEN" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).VIS_AREA" id="VIS_AREA">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The "counterpart area" (also known as "vis-a-vis area") is related to statistics on foreign trade, migration or other domains. It determines, from the point of view of the reporting country, the corresponding area to which the economic or other flows are related to (for instance, in statistics on imports, the counterpart reference area is the area of origin of the goods).
A categorisation of ID's per attachment level (VIS_AREA_DSET for dataset, VIS_AREA_GRP for group) is recommended.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Counterpart reference area</com:Name>
					<com:Description xml:lang="en">The secondary area, as opposed to reference area, to which the measured data is in relation.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COVERAGE" id="COVERAGE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The term "coverage" encompasses the descriptions of key dimensions delimiting the statistics produced, e.g. geographical, institutional, product, economic sector, industry, occupation, transaction, etc., as well as relevant exceptions and exclusions. 
The term "coverage" describes the scope of the data compiled, rather than the characteristics of the survey.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Coverage</com:Name>
					<com:Description xml:lang="en">The definition of the population that statistics aim to cover.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COVERAGE_SECTOR" id="COVERAGE_SECTOR">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The sector coverage delimits the statistical results with regard to the main sectors covered. These sectors can be institutional sectors, economic or other sectors (e.g. local government sector, agriculture, forestry, or business services).</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Coverage - sector</com:Name>
					<com:Description xml:lang="en">Main economic or other sectors covered by the statistics.</com:Description>
					<str:Parent>
						<Ref id="COVERAGE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COVERAGE_TIME" id="COVERAGE_TIME">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The time period covered can be indicated as a time interval, e.g. "1985 to 2006" for annual time series data, or as several intervals or values of time.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Coverage - time</com:Name>
					<com:Description xml:lang="en">The length of time for which data are available.</com:Description>
					<str:Parent>
						<Ref id="COVERAGE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).CURRENCY" id="CURRENCY">
					<com:Name xml:lang="en">Currency</com:Name>
					<com:Description xml:lang="en">Monetary denomination of the object being measured.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COLL_METHOD" id="COLL_METHOD">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">There are a number of data collection methods used for official statistics, including computer-aided personal or telephone interview CAPI/CATI, mailed questionnaires, electronic or internet questionnaires and direct observation. The data collection may be exclusively for statistical purposes, or primarily for non-statistical purposes.
Descriptions of data collection methods should include the purpose for which the data were collected, the period the data refer to, the classifications and definitions used, and any constraints related to further use of these data.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data collection</com:Name>
					<com:Description xml:lang="en">Systematic process of gathering data for official statistics.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_COMP" id="DATA_COMP">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Data compilation" refers to the description of statistical procedures used for producing intermediate data and final statistical outputs. Data compilation covers, among other things, the use of weighting schemes, methods for imputing missing values or source data, statistical adjustment, balancing/cross-checking techniques and relevant characteristics of the specific methods applied.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data compilation</com:Name>
					<com:Description xml:lang="en">Operations performed on data to derive new information according to a given set of rules.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DISS_ORG" id="DISS_ORG">
					<com:Name xml:lang="en">Data dissemination agency</com:Name>
					<com:Description xml:lang="en">The organisation disseminating the data.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_EDITING" id="DATA_EDITING">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Editing techniques refer to a range of procedures and processes used for detecting and handling errors in data, also aiming at avoiding their future repetition. An "edit" is the correction of an error in data. An "editing rule" is the specification of the conditions under which edits are made.
Examples of different techniques include the different approaches to editing such as micro-editing/ macro-editing, input/output editing, or to the various tools available for editing such as graphical editing, interactive editing, etc.
Edit types refer to the actual nature of edits applied to data during input or output processing. These include:
- validation edits, to check the validity of basic identification of classificatory items in unit data;
- logical edits, to ensure that two or more data items do not have contradictory values;
- consistency edits, to ensure that precise and correct arithmetic relationships exist between two or more data items;
- range edits, identifying whether or not a data item value falls inside a determined acceptable range;
- variance edits, looking for suspiciously high variances at the output edit stage.
Micro-editing and macro-editing may be distinguished in order to calculate rate of edits. Edit types may also refer to whether these edits are fatal or query type, i.e. whether they detect errors with certainty or point to suspicious data items.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data editing</com:Name>
					<com:Description xml:lang="en">Activity aimed at detecting and correcting errors, logical inconsistencies and suspicious data.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_PRES" id="DATA_PRES">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Data can be displayed to users as tables, graphs or maps. According to the United Nations Fundamental Principles of Official Statistics, the choice of appropriate presentation methods should be made in accordance with professional considerations. Data presentation includes the description of the dataset disseminated with the main variables covered, the classifications and breakdowns used, the reference area, a summary information on the time period covered and, if applicable, the base period used.
This concept can be broken down into: "Data presentation - data description" and "Data presentation - disseminated detail".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data presentation</com:Name>
					<com:Description xml:lang="en">Description of the disseminated data.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_DESCR" id="DATA_DESCR">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">This summary description should provide an immediate understanding of the data to users (also to those which do not have a broader technical knowledge of the data set in question).</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data presentation - data description</com:Name>
					<com:Description xml:lang="en">Main characteristics of the data set described in an easily understandable manner, referring to the data and indicators disseminated.</com:Description>
					<str:Parent>
						<Ref id="DATA_PRES" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DISS_DET" id="DISS_DET">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Description of data disseminated or available on request by, for example: time period covered, geographical coverage, coverage of breakdowns by geographical entities, target population and its breakdowns, and coverage of variables measured in the statistical target population. Also the standards (e.g. classification systems) employed in the breakdowns provided should be described, so that datasets in different domains can be related through an appropriate set of common concepts.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data presentation - disseminated detail</com:Name>
					<com:Description xml:lang="en">Disseminated domain, measure, and time period breakdowns of statistics in the dataset.</com:Description>
					<str:Parent>
						<Ref id="DATA_PRES" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_PROVIDER" id="DATA_PROVIDER">
					<com:Name xml:lang="en">Data provider</com:Name>
					<com:Description xml:lang="en">Organisation which produces data or metadata.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_REV" id="DATA_REV">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Preliminary data are revised when more and better source data become available, or due to a change in methodology. "Data revision" describes the policy and practice for identifying the revision status of the data, as well as the availability of revision studies and analyses.
This concept can be broken down into:  "Data revision - policy"; "Data revision - practice"; "Data revision - studies".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data revision</com:Name>
					<com:Description xml:lang="en">Any change in a value of a statistic released to the public.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REV_POLICY" id="REV_POLICY">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The general guidelines for handling data revisions applied by a data providing agency should be described.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data revision - policy</com:Name>
					<com:Description xml:lang="en">Policy aimed at ensuring the transparency of disseminated data, whereby preliminary data are compiled that are later revised.</com:Description>
					<str:Parent>
						<Ref id="DATA_REV" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REV_PRACTICE" id="REV_PRACTICE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Documentation regarding the source data used and the way they are adjusted, in order to give compilers the possibility of incorporating new and more accurate information into estimates, thus improving their accuracy without introducing breaks in the time series. It also describes the revision status of available data.
Data may also be subject to regular or ad hoc revisions as a result of the introduction of new classifications, compilation frameworks and methodologies which result in the compilation of historical data that replaces previously released data. Whether or not such changes constitute an actual "revision" or the compilation of a "new" series is a matter of judgment to be done by the statistical agency.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data revision - practice</com:Name>
					<com:Description xml:lang="en">Information on the data revision practice.</com:Description>
					<str:Parent>
						<Ref id="DATA_REV" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REV_STUDY" id="REV_STUDY">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Description of periodic studies related to data revisions. These studies can contain quantitative measures of the effects of revisions, such as mean revision and revision variance in estimates.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data revision - studies</com:Name>
					<com:Description xml:lang="en">Information about data revision studies and analyses.</com:Description>
					<str:Parent>
						<Ref id="DATA_REV" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DSI" id="DSI">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The data set identifier is specified and agreed between data exchange partners in the context of a data exchange agreement.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data set identifier</com:Name>
					<com:Description xml:lang="en">Sequence of characters identifying the data set with which it is associated.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_UPDATE" id="DATA_UPDATE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The data update relates to the date which is registered in the production or the dissemination database of a data compiling organisation. The modification can imply several actions: data can be updated, verified and validated without change, or deleted. The data update does not necessarily imply that data are released.
The date of the data update may refer to the last update of the content, or to the latest verification without update of the content, or to the date of dissemination on the web. Correspondingly, this concept can be broken down into: Data update - last update; Data update - last verification; Data update - last posted.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data update</com:Name>
					<com:Description xml:lang="en">The date on which the data element was inserted or modified in the database.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_VALIDATION" id="DATA_VALIDATION">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Data validation describes methods and processes for assessing statistical data, and how the results of the assessments are monitored and made available to improve statistical processes. 
All the controls made in terms of quality of the data to be published or already published are included in the validation process. Validation also takes into account the results of studies and analysis of revisions and how they are used to improve statistical processes. In this process, two dimensions can be distinguished: (i) validation before publication of the figures and (ii) validation after publication.
This concept can be further broken down into "Data validation - intermediate", "Data validation - output" and "Data validation - source".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data validation</com:Name>
					<com:Description xml:lang="en">Process of monitoring the results of data compilation and ensuring the quality of the statistical results.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_VAL_INTER" id="DATA_VAL_INTER">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">It contains the description of how intermediate results are checked or compared with other information where applicable, and how discrepancies and other problems in intermediate data are assessed and investigated.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data validation - intermediate</com:Name>
					<com:Description xml:lang="en">Validation that intermediate calculations leading to statistical outputs have been correctly done.</com:Description>
					<str:Parent>
						<Ref id="DATA_VALIDATION" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_VAL_OUTPUT" id="DATA_VAL_OUTPUT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Data validation output" describes how statistical discrepancies in the final data are assessed and investigated and how other potential indicators or problems in statistical output are investigated. The assessment can be done before or after publication of the data.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data validation - output</com:Name>
					<com:Description xml:lang="en">Assessment of discrepancies and other problems in statistical outputs.</com:Description>
					<str:Parent>
						<Ref id="DATA_VALIDATION" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DATA_VAL_SOURCE" id="DATA_VAL_SOURCE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Data validation - source" describes the assessment of source data, including censuses, sample surveys, and administrative records, and how the results of the assessments are monitored and made available to improve statistical processes.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Data validation - source</com:Name>
					<com:Description xml:lang="en">Assessment of discrepancies and other problems related to source data.</com:Description>
					<str:Parent>
						<Ref id="DATA_VALIDATION" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DECIMALS" id="DECIMALS">
					<com:Name xml:lang="en">Decimals</com:Name>
					<com:Name xml:lang="es">Decimales</com:Name>
					<com:Name xml:lang="fr">Décimales</com:Name>
					<com:Description xml:lang="en">The number of digits of an observation to the right of a decimal point.</com:Description>
					<str:CoreRepresentation>
						<str:Enumeration>
							<Ref package="codelist" agencyID="SDMX" id="CL_DECIMALS" version="1.0" class="Codelist" />
						</str:Enumeration>
					</str:CoreRepresentation>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DISS_FORMAT" id="DISS_FORMAT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Dissemination format" refers to the various means of dissemination used for making the data available to the public. It includes a description of the various formats available, including where and how to get the information (e.g. paper, electronic publications, on-line databases).
This concept can be further broken down into: "Dissemination format - microdata access", "Dissemination format - news release", "Dissemination format - online database", "Dissemination format - publications" and "Dissemination format - other formats".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Dissemination format</com:Name>
					<com:Description xml:lang="en">Media by which statistical data and metadata are disseminated.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).MICRO_DAT_ACC" id="MICRO_DAT_ACC">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">It should be stated if micro-data are also disseminated, e.g. to researchers. Access conditions should be described in short.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Dissemination format - microdata access</com:Name>
					<com:Description xml:lang="en">Information on whether micro-data are also disseminated.</com:Description>
					<str:Parent>
						<Ref id="DISS_FORMAT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).NEWS_REL" id="NEWS_REL">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">This concept covers press releases or other kind of similar releases linked to data or metadata.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Dissemination format - news release</com:Name>
					<com:Description xml:lang="en">Regular or ad hoc press releases linked to the data.</com:Description>
					<str:Parent>
						<Ref id="DISS_FORMAT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).ONLINE_DB" id="ONLINE_DB">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Link to the online database where the data are available, with a summary identification of domain names as released on the website, as well as the related access conditions.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Dissemination format - online database</com:Name>
					<com:Description xml:lang="en">Information about online databases in which the disseminated data can be accessed.</com:Description>
					<str:Parent>
						<Ref id="DISS_FORMAT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).PUBLICATIONS" id="PUBLICATIONS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">References to the most important data dissemination done through paper or online publications, including a summary identification and information on availability of the publication means.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Dissemination format - publications</com:Name>
					<com:Description xml:lang="en">Regular or ad hoc publications in which the data are made available to the public.</com:Description>
					<str:Parent>
						<Ref id="DISS_FORMAT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DISS_OTHER" id="DISS_OTHER">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Examples of other dissemination formats are analytical publications edited by policy users.
This concept includes, as a sub-element, "Supplementary data", i.e. any customised tabulation that can be provided to meet specific requests (including information on procedures for obtaining access to these data).</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Dissemination format - other formats</com:Name>
					<com:Description xml:lang="en">References to the most important other data dissemination done.</com:Description>
					<str:Parent>
						<Ref id="DISS_FORMAT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).DOC_METHOD" id="DOC_METHOD">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Documentation on methodology" refers to the availability of documentation related to various aspects of the data, such as methodological documents, summary notes or papers covering concepts, scope, classifications and statistical techniques.
This concept also includes the "Advance notice of changes in methodology", indicating whether the public is notified before a methodological change affects disseminated data and, if so, how long before.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Documentation on methodology</com:Name>
					<com:Description xml:lang="en">Descriptive text and references to methodological documents available.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).ADV_NOTICE" id="ADV_NOTICE">
					<com:Name xml:lang="en">Documentation on methodology - advance notice</com:Name>
					<com:Description xml:lang="en">Policy on notifying the public of changes in methodology, indicating whether the public is notified before a methodological change affects disseminated data and, if so, how long before.</com:Description>
					<str:Parent>
						<Ref id="DOC_METHOD" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).EDUCATION_LEV" id="EDUCATION_LEV">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The highest level of an educational programme the person has successfully completed is also called "educational attainment of a person". At international level, the ISCED is the standard classification of educational attainment.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Education level</com:Name>
					<com:Description xml:lang="en">The highest level of an educational programme the person has successfully completed.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).EMBARGO_TIME" id="EMBARGO_TIME">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Usually, there is a time span between the finalisation of the production process of statistical data and the moment when the data produced is released and made available to the users. This time span is called "embargo time".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Embargo time</com:Name>
					<com:Description xml:lang="en">The exact time at which the data could be made available to the public.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).FREQ" id="FREQ">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">If a data series has a constant time interval between its observations, this interval determines the frequency of the  series (e.g. monthly, quarterly, yearly).  "Frequency" - also called "periodicity" - may refer to several stages in the production process, e.g. in data collection or in data dissemination (e.g. a time series could be available at annual frequency but the underlying data are compiled monthly). Therefore, "Frequency" can be broken down into "Frequency - data collection" and "Frequency - data dissemination".
For data messages, the frequency is represented through codes. Any additional detail needed (e.g. "weekly on Thursday") must be inserted as free text within "Frequency detail".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Frequency</com:Name>
					<com:Name xml:lang="es">Frecuencia</com:Name>
					<com:Name xml:lang="fr">Fréquence</com:Name>
					<com:Description xml:lang="en">The time interval at which observations occur over a given time period.</com:Description>
					<str:CoreRepresentation>
						<str:Enumeration>
							<Ref package="codelist" agencyID="SDMX" id="CL_FREQ" version="2.0" class="Codelist" />
						</str:Enumeration>
					</str:CoreRepresentation>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).FREQ_DETAIL" id="FREQ_DETAIL">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">For data messages, the concept of "frequency" is represented through codes. Any additional detail needed must be inserted as free text within "frequency detail", e.g. weekly on Thursday.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Frequency - detail</com:Name>
					<com:Description xml:lang="en">A further specification of the frequency to include more detailed information about the type of frequency and frequencies not commonly used.</com:Description>
					<str:Parent>
						<Ref id="FREQ" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).FREQ_COLL" id="FREQ_COLL">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The frequencies with which the source data are collected and produced could be different: a time series could be collected from the respondents at quarterly frequency but the data production may have a monthly frequency. The frequency of data collection should therefore be described.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Frequency - data collection</com:Name>
					<com:Description xml:lang="en">Frequency with which the source data are collected.</com:Description>
					<str:Parent>
						<Ref id="FREQ" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).FREQ_DISS" id="FREQ_DISS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The frequencies with which data are released, which could be different from the frequency of data collection.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Frequency - data dissemination</com:Name>
					<com:Description xml:lang="en">The time interval at which the statistics are disseminated over a given time period.</com:Description>
					<str:Parent>
						<Ref id="FREQ" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).GROSS_NET" id="GROSS_NET">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Combinations in which all statistical items are shown for their full values are called "gross" recordings. Combinations whereby the values of some elementary items are offset against items on the other side of the account or which have an opposite sign are called "net" or "consolidated" recordings. 
Individual units or sectors may have the same kind of transactions both as a use and as a resource (e.g. they both pay and receive interest) and the same kind of financial instrument as an asset and as a liability.
Examples of the application of this concept include gross versus net domestic product (GDP less consumption of fixed capital), and various consolidations across units in presentations of statements of operations and balance sheets for general government and for financial corporations, among others.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Grossing / Netting</com:Name>
					<com:Description xml:lang="en">Form of consolidation used in presenting the data.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).IND_TYPE" id="IND_TYPE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Index type refers to the various indices used in the statistical production process (Laspeyres, modified Laspeyres, Paasche,  Value-Added, Fisher, Tornqvist or other indexes). Important features in the construction of an index number are its coverage, base period, weighting system and method of averaging statistical results.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Index type</com:Name>
					<com:Description xml:lang="en">The type of index number used in the statistical production process.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).INST_MANDATE" id="INST_MANDATE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">It also includes arrangements or procedures to facilitate data sharing and coordination between data producing agencies.
This concept can be further broken down into: "Institutional mandate - data sharing"; "Institutional mandate - legal acts and other agreements"; "Institutional mandate - respondent relations".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Institutional mandate</com:Name>
					<com:Description xml:lang="en">Set of rules or other formal set of instructions assigning responsibility as well as the authority to an organisation for the collection, processing, and dissemination of statistics.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).INST_MAN_SHAR" id="INST_MAN_SHAR">
					<com:Name xml:lang="en">Institutional mandate - data sharing</com:Name>
					<com:Description xml:lang="en">Arrangements or procedures for data sharing and coordination between data producing agencies.</com:Description>
					<str:Parent>
						<Ref id="INST_MANDATE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).INST_MAN_LA_OA" id="INST_MAN_LA_OA">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The concept covers provision in law assigning responsibility to specific organisations for collection, processing, and dissemination of statistics in one or several statistical domains. In addition, non-legal measures such as formal or informal administrative arrangements employed to specific organisations for collection, processing, and dissemination of statistics in one or several statistical domains should also be described.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Institutional mandate - legal acts and other agreements</com:Name>
					<com:Description xml:lang="en">Legal acts or other formal or informal agreements that assign responsibility as well as the authority to an agency for the collection, processing, and dissemination of statistics.</com:Description>
					<str:Parent>
						<Ref id="INST_MANDATE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).I_M_RES_REL" id="I_M_RES_REL">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Provision in law for compulsory reporting of information to the designated agency for statistical purposes. In addition, non-legal measures employed to encourage reporting statistical information to designated agencies should be described.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Institutional mandate - respondent relations</com:Name>
					<com:Description xml:lang="en">Measures to encourage statistical reporting and/or to sanction non-reporting.</com:Description>
					<str:Parent>
						<Ref id="INST_MANDATE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).M_AGENCY" id="M_AGENCY">
					<com:Name xml:lang="en">Maintenance agency</com:Name>
					<com:Description xml:lang="en">The organisation or other expert body that maintains a domain-specific data or metadata structure definition.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).META_UPDATE" id="META_UPDATE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The date of the metadata update may refer to the update of a whole metadata set or to the update of any single metadata item. The update can refer to the file update (with or without change in the content) or to the date on which the metadata have been posted on the web.
Correspondingly, this concept can be broken down into: "Metadata update -  last certified"; "Metadata update -  last posted"; "Metadata update - last update".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Metadata update</com:Name>
					<com:Description xml:lang="en">The date on which the metadata element was inserted or modified in the database.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).META_CERTIFIED" id="META_CERTIFIED">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">In statistical agencies, the domain manager is often asked to certify that the metadata are checked and updated at regular time intervals. The date of the latest certification is to be retained. The concept is relevant for metadata reporting from countries to international organisations within metadata standards initiatives.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Metadata update - last certified</com:Name>
					<com:Description xml:lang="en">Date of the latest certification provided by the domain manager to confirm that the metadata posted are still up-to-date, even if the content has not been amended.</com:Description>
					<str:Parent>
						<Ref id="META_UPDATE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).META_POSTED" id="META_POSTED">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The date of the last posting (dissemination) of the metadata on the web site should be retained.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Metadata update - last posted</com:Name>
					<com:Description xml:lang="en">Date of the latest dissemination of the metadata.</com:Description>
					<str:Parent>
						<Ref id="META_UPDATE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).META_LAST_UPDATE" id="META_LAST_UPDATE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The last update of the content of metadata should be retained. The update can concern one single concept, but also the metadata file as a whole. The concept is also relevant for metadata reporting from countries to international organisations within metadata standards initiatives.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Metadata update - last update</com:Name>
					<com:Description xml:lang="en">Date of last update of the content of the metadata.</com:Description>
					<str:Parent>
						<Ref id="META_UPDATE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).OBS_VALUE" id="OBS_VALUE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The "observation value" is the field which holds the data.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Observation</com:Name>
					<com:Description xml:lang="en">The value of a particular variable at a particular period.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).OBS_PRE_BREAK" id="OBS_PRE_BREAK">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">At a time series break period, two observations may be recorded: the pre-break value produced on the basis of the old methodology and the post-break value, as measured by the new methodology. SDMX allows for a pre-break value in the case of a series break, where one would use the observation value to show the post-break value.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Observation pre-break value</com:Name>
					<com:Description xml:lang="en">The observation, at a time series break period, that was calculated using the old methodology.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).OBS_STATUS" id="OBS_STATUS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">This item is normally coded and uses codes providing information about the status of a value, with respect to events such as "break", "estimated value", "forecast", "missing value", or "provisional value".  In some cases, there is more than one event that may have influenced the value (e.g. a break in methodology may be accompanied with the fact that an observation is an estimate). 
A textual comment providing more detailed information on important events related to an observation can be added via the attribute "Comment".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Observation status</com:Name>
					<com:Name xml:lang="es">Estado de observación</com:Name>
					<com:Name xml:lang="fr">Etat d'observation</com:Name>
					<com:Description xml:lang="en">Information on the quality of a value or an unusual or missing value.</com:Description>
					<str:CoreRepresentation>
						<str:Enumeration>
							<Ref package="codelist" agencyID="SDMX" id="CL_OBS_STATUS" version="1.1" class="Codelist" />
						</str:Enumeration>
					</str:CoreRepresentation>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).OCCUPATION" id="OCCUPATION">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Occupation refers to the type of work done during the reference period by the person employed (or the type of work done previously, if the person is unemployed), irrespective of the industry or the status in employment in which the person should be classified. Occupation is defined in terms of jobs or posts. "Job" is defined by the International Labour Organisation (ILO) as a set of tasks and duties executed, or meant to be executed, by one person. A set of jobs whose main tasks and duties are characterised by a high degree of similarity constitutes an occupation. Persons are classified by occupation through their relationship to a past, present or future job. The international standard for classification of occupations is the International Standard Classification of Occupations (ISCO). Therefore the concept is normally coded, i.e. represented through a code list.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Occupation</com:Name>
					<com:Description xml:lang="en">Job or position held by an individual who performs a set of tasks and duties.</com:Description>
					<str:CoreRepresentation>
						<str:Enumeration>
							<Ref package="codelist" agencyID="SDMX" id="CL_OCCUPATION" version="1.0" class="Codelist" />
						</str:Enumeration>
					</str:CoreRepresentation>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).ORIG_DATA_ID" id="ORIG_DATA_ID">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">A unique identifier should enable data producers to recognise the database where the data were stored.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Originator data identifier</com:Name>
					<com:Description xml:lang="en">The data identifier as found in the originating database.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).PROF" id="PROF">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">To retain trust in official statistics, the statistical agencies need to decide according to strictly professional considerations, including scientific principles and professional ethics, on the methods and procedures for the collection, processing, storage and presentation of statistical data (United Nations Fundamental Principles of Official Statistics, principle 2).
"Professionalism" describes the elements providing assurances that: statistics are produced on an impartial basis; elements providing assurances that the choices of sources and statistical techniques as well as decisions about dissemination are informed solely by statistical considerations; elements providing assurances that the recruitment and promotion of staff are based on relevant aptitude; elements providing assurances that the statistical entity is entitled to comment on erroneous interpretation and misuse of statistics, guidelines for staff behaviour and procedures used to make these guidelines known to staff; other practices that provide assurances of the independence, integrity, and accountability of the statistical agency.
This concept can be further broken down into: "Professionalism - code of conduct"; "Professionalism  - impartiality"; "Professionalism - methodology"; "Professionalism - statistical commentary".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Professionalism</com:Name>
					<com:Description xml:lang="en">The standard, skill and ability suitable for producing statistics of good quality.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).PROF_COND" id="PROF_COND">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Description of policies promoting the recruitment and promotion of staff based based on relevant aptitude; providing guidelines for staff behaviour and procedures to make these guidelines known to staff; and prescribing other practices that provide assurances of the independence, integrity, and accountability of the statistical agency.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Professionalism - code of conduct</com:Name>
					<com:Description xml:lang="en">Provision for assuring the qualifications of staff and allowing staff to perform their functions without intervention motivated by non-statistical objectives.</com:Description>
					<str:Parent>
						<Ref id="PROF" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).PROF_IMP" id="PROF_IMP">
					<com:Name xml:lang="en">Professionalism - impartiality</com:Name>
					<com:Description xml:lang="en">Description of the elements providing assurances that statistics are produced on an impartial basis.</com:Description>
					<str:Parent>
						<Ref id="PROF" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).PROF_METH" id="PROF_METH">
					<com:Name xml:lang="en">Professionalism - methodology</com:Name>
					<com:Description xml:lang="en">Describes the elements providing assurances that the choices of sources and statistical techniques as well as decisions about dissemination are informed solely by statistical considerations.</com:Description>
					<str:Parent>
						<Ref id="PROF" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).PROF_STAT_COM" id="PROF_STAT_COM">
					<com:Name xml:lang="en">Professionalism - statistical commentary</com:Name>
					<com:Description xml:lang="en">Describes the elements providing assurances that the statistical entity is entitled to comment on erroneous interpretation and misuse of statistics.</com:Description>
					<str:Parent>
						<Ref id="PROF" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).PUNCTUALITY" id="PUNCTUALITY">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Punctuality may be calculated, for instance, with reference to target dates announced in an official release calendar, laid down by regulations or previously agreed among partners.
In quality assessment, punctuality is often associated with timeliness, which refers to the time lag between the end of the reference period and the release of data.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Punctuality</com:Name>
					<com:Description xml:lang="en">Time lag between the actual delivery of the data and the target date when it should have been delivered.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).QUALITY_MGMNT" id="QUALITY_MGMNT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Quality management" refers to the application of a formalised system that documents the structure, responsibilities and procedures put in place for satisfying users, while continuing to improve the data production and dissemination process. It also includes how well the resources meet the requirement.
This concept can be broken down into: "Quality management - quality assurance"; "Quality management - assessment"; "Quality management - documentation".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Quality management</com:Name>
					<com:Description xml:lang="en">Systems and frameworks in place within an organisation to manage the quality of statistical products and processes.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).QUALITY_ASSMNT" id="QUALITY_ASSMNT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The overall assessment of data quality may include the result of a scoring or grading process for quality. Scoring may be quantitative or qualitative.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Quality management - quality assessment</com:Name>
					<com:Description xml:lang="en">Overall assessment of data quality, based on standard quality criteria.</com:Description>
					<str:Parent>
						<Ref id="QUALITY_MGMNT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).QUALITY_ASSURE" id="QUALITY_ASSURE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Quality assurance" refers to all the planned and systematic activities implemented that can be demonstrated to provide confidence that the data production processes will fulfil the requirements for the statistical output. This includes the design of programmes for quality management, the description of planning process, scheduling of work, frequency of plan updates, and other organisational arrangements to support and maintain planning function.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Quality management - quality assurance</com:Name>
					<com:Description xml:lang="en">Guidelines focusing on quality in general and dealing with quality of statistical programmes, including measures for ensuring the efficient use of resources.</com:Description>
					<str:Parent>
						<Ref id="QUALITY_MGMNT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).QUALITY_DOC" id="QUALITY_DOC">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">It contains a documentation of methods and standards for assessing data quality, based on standard quality criteria such as relevance, accuracy and reliability, timeliness and punctuality, accessibility and clarity, comparability, and coherence.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Quality management - documentation</com:Name>
					<com:Description xml:lang="en">Documentation on procedures applied for quality management and quality assessment.</com:Description>
					<str:Parent>
						<Ref id="QUALITY_MGMNT" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).RECORDING" id="RECORDING">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The recording of transactions covers a broad range of processes and accounting conventions, including types of valuation, prices, conversion rates, the accounting basis, units of measurement used in data collection, etc. It also refers to descriptions of the time of recording (e.g. cash or accrual basis) employed. The description may also include how consistent the practices used are with internationally accepted standards, guidelines, or good practices.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Recording basis</com:Name>
					<com:Description xml:lang="en">Processes and standards employed in calculating statistical aggregates.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REF_AREA" id="REF_AREA">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The concept refers to the country, geographical or political group of countries or regions within a country.
The concept is subject to a variety of hierarchies, as countries comprise territorial entities that are States (as understood by international law and practice), regions and other territorial entities that are not States (such as Hong Kong) but for which statistical data are produced internationally on a separate and independent basis.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Reference area</com:Name>
					<com:Name xml:lang="es">Área de referencia</com:Name>
					<com:Description xml:lang="en">The country or geographic area to which the measured statistical phenomenon relates.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REF_PERIOD" id="REF_PERIOD">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">In many cases, the reference period and time period will be identical, but there are also cases where they are different. This can happen if data are not available for the target reference period, but are available for a time period which is judged to be sufficiently close. For example, the reference period may be a calendar year, whereas data may only be available for a fiscal year. In such cases, "reference period" should refer to the target reference period rather than the actual time period of the data. The difference between target and actual reference period can be highlighted in a free text note.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Reference period</com:Name>
					<com:Description xml:lang="en">The period of time or point in time to which the measured observation is intended to refer.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REF_PER_WGTS" id="REF_PER_WGTS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Concept relevant for index numbers and transformations such as "GDP at constant prices".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Reference period - weights</com:Name>
					<com:Description xml:lang="en">Dates or periods to which the observations used to compile the weights refer.</com:Description>
					<str:Parent>
						<Ref id="REF_PERIOD" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REL_POLICY" id="REL_POLICY">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Describes the policy for release of the data to the public, how the public is informed that the data are being released, and whether the data are disseminated to all interested parties at the same time.
This concept can be broken down into: "Release policy - legal acts and other agreements"; "Release policy - policy commentary"; "Release policy - release calendar"; "Release policy - release calendar access"; "Release policy - transparency"; "Release policy - user access".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Release policy</com:Name>
					<com:Description xml:lang="en">Rules for disseminating statistical data to interested parties.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REL_POL_LEG_ACTS" id="REL_POL_LEG_ACTS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Description of the legal and institutional framework defining which users have access to what data, on what conditions, and on what time schedule.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Release policy - legal acts and other agreements</com:Name>
					<com:Description xml:lang="en">Legal acts and other agreements pertaining to data access.</com:Description>
					<str:Parent>
						<Ref id="REL_POLICY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REL_COMMENT" id="REL_COMMENT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">This concept relates to policy commentary that other authorities might add to the data released to the public.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Release policy - policy commentary</com:Name>
					<com:Description xml:lang="en">Description of whether or not a ministerial commentary is provided on the occasion of statistical release.</com:Description>
					<str:Parent>
						<Ref id="REL_POLICY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REL_CAL_POLICY" id="REL_CAL_POLICY">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">An advance release calendar is the schedule for release of data, which is publicly disseminated so as to provide prior notice of the precise release dates on which a national statistical agency, other national agency, or international organisation undertakes to release a specified statistical information to the public. Such information may be provided for statistical releases in the coming week, month, quarter or year.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Release policy - release calendar</com:Name>
					<com:Description xml:lang="en">The schedule of statistical release dates.</com:Description>
					<str:Parent>
						<Ref id="REL_POLICY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REL_CAL_ACCESS" id="REL_CAL_ACCESS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">This describes how the release calendar can be accessed. A hyperlink should be provided if available.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Release policy - release calendar access</com:Name>
					<com:Description xml:lang="en">Access to the release calendar information.</com:Description>
					<str:Parent>
						<Ref id="REL_POLICY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REL_POL_TRA" id="REL_POL_TRA">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">It concerns whether the description of the release policy is disseminated to the public and by what modality, but not the description of the release policy itself.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Release policy - transparency</com:Name>
					<com:Description xml:lang="en">Dissemination of the release policy to the public.</com:Description>
					<str:Parent>
						<Ref id="REL_POLICY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REL_POL_US_AC" id="REL_POL_US_AC">
					<com:Name xml:lang="en">Release policy - user access</com:Name>
					<com:Description xml:lang="en">The policy for release of the data to users, the scope of dissemination (e.g. to the public, to selected users), how users are informed that the data are being released, and whether the policy provides for the dissemination of statistical data to all users at the same time. It also describes the policy for briefing the press in advance of the release of the data.</com:Description>
					<str:Parent>
						<Ref id="REL_POLICY" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).RELEVANCE" id="RELEVANCE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Relevance is concerned with whether the available information sheds light on the issues that are important to users. Assessing relevance is subjective and depends upon the varying needs of users. The agency's challenge is to weigh and balance the conflicting needs of current and potential users to produce statistics that satisfy the most important needs within given resource constraints. In assessing relevance, one approach is to gauge relevance directly, by polling users about the data. Indirect evidence of relevance may be found by ascertaining where there are processes in place to determine the uses of data and the views of their users or to use the data in-house for research and other analysis. Relevance refers to the processes for monitoring the relevance and practical usefulness of existing statistics in meeting users' needs and how these processes impact the development of statistical programmes.
This concept can be broken down into: "Relevance - completeness"; "Relevance - user needs"; "Relevance - user satisfaction".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Relevance</com:Name>
					<com:Description xml:lang="en">The degree to which statistical information meets the real or perceived needs of clients.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).COMPLETENESS" id="COMPLETENESS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The measurement of the availability of statistics normally refers to data sets and compares the required data set to the available one.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Relevance - completeness</com:Name>
					<com:Description xml:lang="en">The extent to which all statistics that are needed are available.</com:Description>
					<str:Parent>
						<Ref id="RELEVANCE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).USER_NEEDS" id="USER_NEEDS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">With respect to the statistical data to be provided, the main users (e.g. official authorities, the public or others) and user needs should be stated, e.g. official authorities with the needs for policy indicators, national users, etc.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Relevance - user needs</com:Name>
					<com:Description xml:lang="en">Description of users and their respective needs with respect to the statistical data.</com:Description>
					<str:Parent>
						<Ref id="RELEVANCE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).USER_SAT" id="USER_SAT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">User satisfaction concerns how well the disseminated statistics meet the expressed user needs. If user satisfaction surveys have been conducted, the domain manager should mention them. Otherwise, any other indication or measure to determine user satisfaction might be used.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Relevance - user satisifaction</com:Name>
					<com:Description xml:lang="en">Measure to determine user satisfaction.</com:Description>
					<str:Parent>
						<Ref id="RELEVANCE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).REP_AGENCY" id="REP_AGENCY">
					<com:Name xml:lang="en">Reporting agency</com:Name>
					<com:Description xml:lang="en">The organisation that supplies the data for a given instance of the statistics.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).SAMPLING" id="SAMPLING">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Refers to information on sample design, sample size, sample frame, sample updating, etc.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Sampling</com:Name>
					<com:Description xml:lang="en">The process of selecting a number of cases from all the cases in a particular group or universe.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).SEX" id="SEX">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">This concept is applied if data needs to be categorised by sex. The concept is in general coded, i.e. represented through a code list.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Sex</com:Name>
					<com:Name xml:lang="es">Sexo</com:Name>
					<com:Name xml:lang="fr">Sexe</com:Name>
					<com:Description xml:lang="en">The state of being male or female.</com:Description>
					<str:CoreRepresentation>
						<str:Enumeration>
							<Ref package="codelist" agencyID="SDMX" id="CL_SEX" version="2.0" class="Codelist" />
						</str:Enumeration>
					</str:CoreRepresentation>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).SOURCE_TYPE" id="SOURCE_TYPE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The type of source, including whether it is a statistical or non-statistical source, and any relevant characteristics (e.g. sample size for survey data, or characteristics of administrative data) should be mentioned.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Source data</com:Name>
					<com:Description xml:lang="en">Characteristics and components of the raw statistical data used for compiling statistical aggregates.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).STAT_CONC_DEF" id="STAT_CONC_DEF">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Statistical concepts and definitions" refers to the definition of the statistical concept under measure (i.e. the statistical domain) and the main variables provided. 
The type of variable provided (raw figures, annual growth rates, index, flow or stock data, etc.) should be defined and described referring to internationally accepted statistical standards, guidelines, or good practices on which the concepts and definitions that are used for compiling the statistics are based.
A "coded" statistical concept takes values from a code list of valid values. An "uncoded" statistical concept takes its values as free form text (e.g. time series title).</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Statistical concepts and definitions</com:Name>
					<com:Description xml:lang="en">Statistical characteristics of statistical observations.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).STAT_POP" id="STAT_POP">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">There are two types of population: target population and survey population. A "target population" is the population outlined in the survey objects about which information is to be sought and a "survey population" is the population from which information is obtained in a survey. The target population is also known as the scope of the survey and the survey population as the coverage of the survey. For administrative data sources, the corresponding populations are the "target population", as defined by the relevant legislation and regulations, and the actual "client population" ("United Nations Glossary of Classification Terms" prepared by the Expert Group on International Economic and Social Classifications).</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Statistical population</com:Name>
					<com:Description xml:lang="en">The total membership or population or "universe" of a defined class of people, objects or events.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).STAT_UNIT" id="STAT_UNIT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The statistical unit is the object of a statistical survey and the bearer of statistical characteristics. These units can, in turn, be divided into observation units and analytical units.
Statistical units for economic statistics are defined on the basis of three criteria: 1) Legal, accounting or organisational criteria; 2) Geographical criteria; 3) Activity criteria.
Statistical units comprise the enterprise, enterprise group, kind-of-activity unit (KAU), local unit, establishment, homogeneous unit of production, persons, households, geographical areas, events, etc. 
Statistical units can be categorised into basic statistical units, i.e. those for which data is collected, and derived statistical units, i.e. those which are constructed during the statistical production process. A basic statistical unit is the most detailed level to which the obtained characteristics can be attached.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Statistical unit</com:Name>
					<com:Name xml:lang="es">Unidad estadística</com:Name>
					<com:Name xml:lang="fr">Unité statistique</com:Name>
					<com:Description xml:lang="en">Entity for which information is sought and for which statistics are ultimately compiled.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).TIME_FORMAT" id="TIME_FORMAT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The technical time format and its related code list are part of the technical standards for SDMX-EDI and SDMX-XML.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Time format</com:Name>
					<com:Description xml:lang="en">Technical format in which time is represented for the measured phenomenon.</com:Description>
					<str:CoreRepresentation>
						<str:Enumeration>
							<Ref package="codelist" agencyID="SDMX" id="CL_TIME_FORMAT" version="1.0" class="Codelist" />
						</str:Enumeration>
					</str:CoreRepresentation>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).TIME_PERIOD" id="TIME_PERIOD">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The measurement represented by each observation corresponds to a specific point in time (e.g. a single day) or a period (e.g. a month, a fiscal year, or a calendar year). This is used as a time stamp and is of particular importance for time series data. In cases where the actual time period of the data differs from the target reference period, “time period” refers to the actual period.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Time period</com:Name>
					<com:Description xml:lang="en">The period of time or point in time to which the measured observation refers.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).TIME_PER_COLLECT" id="TIME_PER_COLLECT">
					<com:Name xml:lang="en">Time period - collection</com:Name>
					<com:Description xml:lang="en">Dates or periods during which the observations have been collected (such as middle, average or end of period) to compile the indicator for the target reference period.</com:Description>
					<str:Parent>
						<Ref id="TIME_PERIOD" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).TIMELINESS" id="TIMELINESS">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Timeliness refers to the speed of data availability, whether for dissemination or for further processing, and it is measured with respect to the time lag between the end of the reference period and the release of data. Timeliness is a crucial element of data quality: adequate timeliness corresponds to a situation where policy-makers can take informed decisions in time for achieving the targeted results. In quality assessment, timeliness is often associated with punctuality, which refers to the time lag between the release date of data and the target date announced in some official release calendar.
Timeliness can be further broken down into "Timeliness - output" and "Timeliness - source data".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Timeliness</com:Name>
					<com:Description xml:lang="en">Length of time between data availability and the event or phenomenon they describe.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).TIME_OUTPUT" id="TIME_OUTPUT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Timeliness of statistical outputs is the time lag between the end of the reference period and the release of a certain version of the data: provisional, preliminary, or final results. "Timeliness - output" reflects many factors, including some that are related to institutional arrangements, such as the preparation of accompanying commentary and printing. Usually, data are not released immediately at the end of the period they refer to, since data collection, data processing and data dissemination work needs to be performed</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Timeliness - output</com:Name>
					<com:Description xml:lang="en">The lapse of time between the end of a reference period and dissemination of the data.</com:Description>
					<str:Parent>
						<Ref id="TIMELINESS" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).TIME_SOURCE" id="TIME_SOURCE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Compared to the parent concept - timeliness - this concept only covers the time period between the end of the reference period and the receipt of the data by the data compiling agency. This time period is determined by factors such as delays reflecting the institutional arrangements for data transmission.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Timeliness - source data</com:Name>
					<com:Description xml:lang="en">The time between the end of a reference period and actual receipt of the data by the compiling agency.</com:Description>
					<str:Parent>
						<Ref id="TIMELINESS" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).TITLE" id="TITLE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">"Title" is a short name describing and identifying a statistical object it is attached to.
IN SDMX, a title can be referred, for example, to a time series as a "time series title", or to a group as a "group title". A list of ID broken down by attachment level is therefore needed: TITLE_TS, or TITLE_GRP.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Title</com:Name>
					<com:Description xml:lang="en">Textual label used as identification of a statistical object.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).UNIT_MULT" id="UNIT_MULT">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">In some databases, it is referred to as SCALE, MAGNITUDE or POWER., e.g. "UM=6" means that observations are in millions.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Unit multiplier</com:Name>
					<com:Name xml:lang="es">Multiplicador de unidades</com:Name>
					<com:Name xml:lang="fr">Multiplicateur de l'unité</com:Name>
					<com:Description xml:lang="en">Exponent in base 10 specified so that multiplying the observation numeric values by 10^UNIT_MULT gives a value expressed in the unit of measure.</com:Description>
					<str:CoreRepresentation>
						<str:Enumeration>
							<Ref package="codelist" agencyID="SDMX" id="CL_UNIT_MULT" version="1.0" class="Codelist" />
						</str:Enumeration>
					</str:CoreRepresentation>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).UNIT_MEASURE" id="UNIT_MEASURE">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">The unit of measure is a quantity or increment by which something is counted or described, such as kg, mm, °C, °F, monetary units such as Euro or US dollar, simple number counts or index numbers. The unit of measure has a type (e.g. currency) and, in connection with the unit multiplier, provides the level of detail for the value of the variable (e.g. Euro, 1000 Euro).
For data messages, the concept is always represented by codes. Any additional detail needed must be inserted as free text within "unit of measure detail".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Unit of measure</com:Name>
					<com:Name xml:lang="es">Unidad de medida</com:Name>
					<com:Name xml:lang="fr">Unité de mesure</com:Name>
					<com:Description xml:lang="en">The unit in which the data values are measured.</com:Description>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).UNIT_MEAS_DETAIL" id="UNIT_MEAS_DETAIL">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">For data messages, as the concept of "unit of measure" is represented through codes, additional detail needed must be inserted as free text within "unit of measure detail".</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Unit of measure detail</com:Name>
					<com:Description xml:lang="en">Additional textual information on the unit of measure.</com:Description>
					<str:Parent>
						<Ref id="UNIT_MEASURE" />
					</str:Parent>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=SDMX:CROSS_DOMAIN_CONCEPTS(1.0).VALUATION" id="VALUATION">
					<com:Annotations>
						<com:Annotation>
							<com:AnnotationType>CONTEXT</com:AnnotationType>
							<com:AnnotationText xml:lang="en">Standard national accounts valuations include the basic price (what the seller receives) and the purchaser's price (what the purchaser pays). The purchaser's price is the basic price, plus taxes less subsidies on products, plus invoiced transportation and insurance services, plus distribution margin. Other valuation bases may be used in other contexts. International trade in goods considers the free on board (fob) price and cost-insurance-freight price, among others.
The concept refers to valuation rules used for recording flows and stocks, including how consistent the practices used are with internationally accepted standards, guidelines, or good practices.</com:AnnotationText>
						</com:Annotation>
					</com:Annotations>
					<com:Name xml:lang="en">Valuation</com:Name>
					<com:Description xml:lang="en">The definition of the price per unit, for goods and services, flows and asset stocks.</com:Description>
				</str:Concept>
			</str:ConceptScheme>
			<str:ConceptScheme urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.ConceptScheme=UNESCO:EDU(1.0)" isExternalReference="false" agencyID="UNESCO" id="EDU" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Education</com:Name>
				<com:Name xml:lang="es">Educación</com:Name>
				<com:Name xml:lang="fr">Education</com:Name>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).LOCATION" id="LOCATION">
					<com:Name xml:lang="en">Location</com:Name>
					<com:Name xml:lang="es">Ubicación</com:Name>
					<com:Name xml:lang="fr">Milieu de résidence</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).WEALTH_QUINTILE" id="WEALTH_QUINTILE">
					<com:Name xml:lang="en">Wealth quintile</com:Name>
					<com:Name xml:lang="es">Quintil de riqueza</com:Name>
					<com:Name xml:lang="fr">Quintile de richesse</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).EDU_TYPE" id="EDU_TYPE">
					<com:Name xml:lang="en">Type of education</com:Name>
					<com:Name xml:lang="es">Tipo de educación</com:Name>
					<com:Name xml:lang="fr">Type d'enseignement</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).EDU_LEVEL" id="EDU_LEVEL">
					<com:Name xml:lang="en">Level of education</com:Name>
					<com:Name xml:lang="es">Nivel de educación</com:Name>
					<com:Name xml:lang="fr">Niveau d'enseignement</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).EDU_CAT" id="EDU_CAT">
					<com:Name xml:lang="en">Education category</com:Name>
					<com:Name xml:lang="es">Categoría de la educación</com:Name>
					<com:Name xml:lang="fr">Catégorie d'enseignement</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).EDU_ATTAIN" id="EDU_ATTAIN">
					<com:Name xml:lang="en">Level of educational attainment</com:Name>
					<com:Name xml:lang="es">Nivel de logro educativo</com:Name>
					<com:Name xml:lang="fr">Niveau d'éducation atteint</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).EDU_FIELD" id="EDU_FIELD">
					<com:Name xml:lang="en">Field of education</com:Name>
					<com:Name xml:lang="es">Campo de educación</com:Name>
					<com:Name xml:lang="fr">Domaine d'études</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).GRADE" id="GRADE">
					<com:Name xml:lang="en">Grade</com:Name>
					<com:Name xml:lang="es">Grado</com:Name>
					<com:Name xml:lang="fr">Année d'étude</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).SECTOR_EDU" id="SECTOR_EDU">
					<com:Name xml:lang="en">Type of institution</com:Name>
					<com:Name xml:lang="es">Tipo de establecimiento</com:Name>
					<com:Name xml:lang="fr">Type d'établissement</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).CONTRACT_TYPE" id="CONTRACT_TYPE">
					<com:Name xml:lang="en">Type of contract</com:Name>
					<com:Name xml:lang="es">Tipo de contrato</com:Name>
					<com:Name xml:lang="fr">Type de contrat</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).TEACH_EXPERIENCE" id="TEACH_EXPERIENCE">
					<com:Name xml:lang="en">Teaching experience</com:Name>
					<com:Name xml:lang="es">Experiencia pedagógica</com:Name>
					<com:Name xml:lang="fr">Expérience dans l'enseignement</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).TEXTB_TYPE" id="TEXTB_TYPE">
					<com:Name xml:lang="en">Type of textbook</com:Name>
					<com:Name xml:lang="es">Tipo de libro de texto</com:Name>
					<com:Name xml:lang="fr">Type de manuel</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).COUNTRY_ORIGIN" id="COUNTRY_ORIGIN">
					<com:Name xml:lang="en">Country / region of origin</com:Name>
					<com:Name xml:lang="es">País o región de origen</com:Name>
					<com:Name xml:lang="fr">Pays / région d'origine</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).BASIC_SERVICES" id="BASIC_SERVICES">
					<com:Name xml:lang="en">Access to basic services</com:Name>
					<com:Name xml:lang="es">Servicios básicos en escuelas públicas</com:Name>
					<com:Name xml:lang="fr">Accès aux services de base</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).EXPENDITURE_TYPE" id="EXPENDITURE_TYPE">
					<com:Name xml:lang="en">Type of expenditure</com:Name>
					<com:Name xml:lang="es">Tipo de gasto</com:Name>
					<com:Name xml:lang="fr">Type de dépenses</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).CLASS_TYPE" id="CLASS_TYPE">
					<com:Name xml:lang="en">Type of class</com:Name>
					<com:Name xml:lang="es">Tipo de clase</com:Name>
					<com:Name xml:lang="fr">Type de classe</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).SUBJECT" id="SUBJECT">
					<com:Name xml:lang="en">School subject</com:Name>
					<com:Name xml:lang="es">Asignatura escolar</com:Name>
					<com:Name xml:lang="fr">Matière scolaire</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).REGION_DEST" id="REGION_DEST">
					<com:Name xml:lang="en">Destination region</com:Name>
					<com:Name xml:lang="es">Región de destino</com:Name>
					<com:Name xml:lang="fr">Région de destination</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).DISPERSION" id="DISPERSION">
					<com:Name xml:lang="en">Dispersion at the sub-regional level</com:Name>
					<com:Name xml:lang="es">Dispersión a nivel subregional</com:Name>
					<com:Name xml:lang="fr">Dispersion au niveau sous-national</com:Name>
				</str:Concept>
				<str:Concept urn="urn:sdmx:org.sdmx.infomodel.conceptscheme.Concept=UNESCO:EDU(1.0).INFRASTR" id="INFRASTR">
					<com:Name xml:lang="en">Infrastructure</com:Name>
					<com:Name xml:lang="es">Infraestructura</com:Name>
					<com:Name xml:lang="fr">Infrastructure</com:Name>
				</str:Concept>
			</str:ConceptScheme>
		</str:Concepts>
		<str:DataStructures>
			<str:DataStructure urn="urn:sdmx:org.sdmx.infomodel.datastructure.DataStructure=UNESCO:EDU_FINANCE(1.0)" isExternalReference="false" agencyID="UNESCO" id="EDU_FINANCE" isFinal="false" version="1.0">
				<com:Name xml:lang="en">Education: Financial resources</com:Name>
				<com:Name xml:lang="es">Educación: Recursos financieros</com:Name>
				<com:Name xml:lang="fr">Education: ressources financières</com:Name>
				<str:DataStructureComponents>
					<str:DimensionList urn="urn:sdmx:org.sdmx.infomodel.datastructure.DimensionDescriptor=UNESCO:EDU_FINANCE(1.0).DimensionDescriptor" id="DimensionDescriptor">
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).UNIT_MEASURE" id="UNIT_MEASURE" position="1">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="UNIT_MEASURE" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_UNIT" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).STAT_UNIT" id="STAT_UNIT" position="2">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="STAT_UNIT" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_STAT_UNIT" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).REF_AREA" id="REF_AREA" position="3">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="REF_AREA" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_AREA" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).EXPENDITURE_TYPE" id="EXPENDITURE_TYPE" position="4">
							<str:ConceptIdentity>
								<Ref maintainableParentID="EDU" package="conceptscheme" maintainableParentVersion="1.0" agencyID="UNESCO" id="EXPENDITURE_TYPE" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_EXPENDITURE_TYPE" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).SECTOR_EDU" id="SECTOR_EDU" position="5">
							<str:ConceptIdentity>
								<Ref maintainableParentID="EDU" package="conceptscheme" maintainableParentVersion="1.0" agencyID="UNESCO" id="SECTOR_EDU" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_SECTOR_EDU" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).EDU_CAT" id="EDU_CAT" position="6">
							<str:ConceptIdentity>
								<Ref maintainableParentID="EDU" package="conceptscheme" maintainableParentVersion="1.0" agencyID="UNESCO" id="EDU_CAT" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_EDU_CAT" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:Dimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.Dimension=UNESCO:EDU_FINANCE(1.0).EDU_LEVEL" id="EDU_LEVEL" position="7">
							<str:ConceptIdentity>
								<Ref maintainableParentID="EDU" package="conceptscheme" maintainableParentVersion="1.0" agencyID="UNESCO" id="EDU_LEVEL" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_EDU_LEVEL" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
						</str:Dimension>
						<str:TimeDimension urn="urn:sdmx:org.sdmx.infomodel.datastructure.TimeDimension=UNESCO:EDU_FINANCE(1.0).TIME_PERIOD" id="TIME_PERIOD" position="8">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="TIME_PERIOD" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:TextFormat />
							</str:LocalRepresentation>
						</str:TimeDimension>
					</str:DimensionList>
					<str:AttributeList urn="urn:sdmx:org.sdmx.infomodel.datastructure.AttributeDescriptor=UNESCO:EDU_FINANCE(1.0).AttributeDescriptor" id="AttributeDescriptor">
						<str:Attribute urn="urn:sdmx:org.sdmx.infomodel.datastructure.DataAttribute=UNESCO:EDU_FINANCE(1.0).UNIT_MULT" assignmentStatus="Conditional" id="UNIT_MULT">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="UNIT_MULT" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="SDMX" id="CL_UNIT_MULT" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
							<str:AttributeRelationship>
								<str:PrimaryMeasure>
									<Ref id="OBS_VALUE" />
								</str:PrimaryMeasure>
							</str:AttributeRelationship>
						</str:Attribute>
						<str:Attribute urn="urn:sdmx:org.sdmx.infomodel.datastructure.DataAttribute=UNESCO:EDU_FINANCE(1.0).FREQ" assignmentStatus="Conditional" id="FREQ">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="FREQ" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="SDMX" id="CL_FREQ" version="2.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
							<str:AttributeRelationship>
								<str:PrimaryMeasure>
									<Ref id="OBS_VALUE" />
								</str:PrimaryMeasure>
							</str:AttributeRelationship>
						</str:Attribute>
						<str:Attribute urn="urn:sdmx:org.sdmx.infomodel.datastructure.DataAttribute=UNESCO:EDU_FINANCE(1.0).DECIMALS" assignmentStatus="Conditional" id="DECIMALS">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="DECIMALS" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="SDMX" id="CL_DECIMALS" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
							<str:AttributeRelationship>
								<str:PrimaryMeasure>
									<Ref id="OBS_VALUE" />
								</str:PrimaryMeasure>
							</str:AttributeRelationship>
						</str:Attribute>
						<str:Attribute urn="urn:sdmx:org.sdmx.infomodel.datastructure.DataAttribute=UNESCO:EDU_FINANCE(1.0).OBS_STATUS" assignmentStatus="Conditional" id="OBS_STATUS">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="OBS_STATUS" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:Enumeration>
									<Ref package="codelist" agencyID="UNESCO" id="CL_OBS_STATUS" version="1.0" class="Codelist" />
								</str:Enumeration>
							</str:LocalRepresentation>
							<str:AttributeRelationship>
								<str:PrimaryMeasure>
									<Ref id="OBS_VALUE" />
								</str:PrimaryMeasure>
							</str:AttributeRelationship>
						</str:Attribute>
					</str:AttributeList>
					<str:MeasureList urn="urn:sdmx:org.sdmx.infomodel.datastructure.MeasureDescriptor=UNESCO:EDU_FINANCE(1.0).MeasureDescriptor" id="MeasureDescriptor">
						<str:PrimaryMeasure urn="urn:sdmx:org.sdmx.infomodel.datastructure.PrimaryMeasure=UNESCO:EDU_FINANCE(1.0).OBS_VALUE" id="OBS_VALUE">
							<str:ConceptIdentity>
								<Ref maintainableParentID="CROSS_DOMAIN_CONCEPTS" package="conceptscheme" maintainableParentVersion="1.0" agencyID="SDMX" id="OBS_VALUE" class="Concept" />
							</str:ConceptIdentity>
							<str:LocalRepresentation>
								<str:TextFormat isSequence="false" textType="Double" />
							</str:LocalRepresentation>
						</str:PrimaryMeasure>
					</str:MeasureList>
				</str:DataStructureComponents>
			</str:DataStructure>
		</str:DataStructures>
	</mes:Structures>
</mes:Structure>
XML;
}