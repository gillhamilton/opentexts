<main role="main" class="container">
    <h1 class="mt-5">Contribute data</h1>
    <p class="lead">
        If you would like to contribute data to be included in OpenTexts.World, please email 
        <a href="mailto:stuart.lewis@nls.uk; gill.hamilton@nls.uk">stuart.lewis@nls.uk and gill.hamilton@nls.uk</a>
        for details.
    </p>
	<h2>Formats accepted</h2>
	<p>We can work with <a href="https://www.loc.gov/marc/bibliographic/" title="MARC21 at Library of Congress, USA">MARC21</a>, <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/" title="DC terms">Dublin Core</a> or <a href<a href="https://en.wikipedia.org/wiki/Tab-separated_values" title="tab-separated value at Wikipedia">TSV</a> (tab-separated) files in the format</a> below.</p>

<p>If your data is in another format, please <a href="mailto:stuart.lewis@nls.uk; gill.hamilton@nls.uk">contact us</a> as we may be able to process and integrate it. We love a challenge!</p>
    
	<h2>Tab-separated format</h2>
    <p>If you are submitting <a href="https://en.wikipedia.org/wiki/Comma-separated_values">tab-separated</a> data please follow the format below. Contact us if you want to include other data/fields that are not represented in the format - we'll try and adapt our tools to accommodate your data.

    <p>Repeatable fields must be separated with a '|' pipe.</p>
    
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope=col">Heading</th>
                <th scope=col">Content</th>
                <th scope=col">Requirement</th>
                <th scope=col">Repeatable</th>
                <th scope=col">Notes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>organisation</td>
                <td>Unique name of provider</td>
                <td>MANDATORY</td>
                <td>No</td>
                <td>
                    So we know which organisation "owns" the metadata and content - 
                    this info might be displayed in a facet or in the full record display</br>
                    </br>
                    Wellcome Library</br>
                    University of Oxford</br>
                    University of Cambridge</br>
                    National Library of Wales</br>
                    National Library of Scotland</br>
                    Trinity College, Dublin</br>
                    The British Library</td>
            </tr>
            <tr>
                <td>idLocal</td>
                <td>Local identifier</td>
                <td>MANDATORY</td>
                <td>No</td>
                <td>
                    ID from the local system - so each library can look up their 
                    local system if there's a query 
                </td>
            </tr>
            <tr>
                <td>title</td>
                <td>Title of the work</td>
                <td>MANDATORY</td>
                <td>No</td>
                <td>
                    For example <a href="https://www.loc.gov/marc/bibliographic/concise/bd245.html">MARC 245 $a $b</a> or <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/title">DC terms:title</a>
                </td>
            </tr>
            <tr>
                <td>urlMain</td>
                <td>URL to access the item</td>
                <td>MANDATORY</td>
                <td>No</td>
                <td>
                    The URL that is most appropriate for a user to follow to get direct/immediate access to the
                    content. May be in <a href="https://www.loc.gov/marc/bibliographic/concise/bd856.html">MARC 856</a> or <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/identifier">DC terms:identifier</a>. This will likely be a 'landing page' containing metadata about the item and the item itself.
                </td>
            </tr>
            <tr>
                <td>year</td>
                <td>Year of publication</td>
                <td>DESIRABLE</td>
                <td>No</td>
                <td>
                    Ideally numeric <a href="https://www.loc.gov/marc/bibliographic/concise/bd008a.html">MARC 008 position 7-10</a> rather than 
                    MARC 260 $c - e.g. preferred to 1884 vs ca.1884). May be in <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/date">DC terms:date</a>
                </td>
            </tr>
                <td>publisher</td>
                <td>Publisher</td>
                <td>DESIRABLE</td>
                <td>Yes</td>
                <td>
                    May be in <a href="https://www.loc.gov/marc/bibliographic/concise/bd260.html">MARC 260 $b</a> or <a href="https://www.loc.gov/marc/bibliographic/bd264.html">MARC 264 $a</a> or <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/publisher">DC terms:publisher</a>
                </td>
            </tr>
            <tr>
                <td>creator</td>
                <td>Creator</td>
                <td>DESIRABLE</td>
                <td>Yes</td>
                <td>
                    Author, editor, creator, organisation - any named person/organisation involved in the creation of the work. May be in MARC <a href="https://www.loc.gov/marc/bibliographic/bd1xx.html">1xx</a>, <a href="https://www.loc.gov/marc/bibliographic/bd70x75x.html">7xx</a> and <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/creator">DC terms:creator</a>, <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/contributor">DC terms:contributor</a>
                </td>
            </tr>
            <tr>
                <td>topic</td>
                <td>Subject or topic</td>
                <td>DESIRABLE</td>
                <td>Yes</td>
                <td>May be in <a href="https://www.loc.gov/marc/bibliographic/bd6xx.html">MARC 6xx</a>, and <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/subject">DC terms:subject</a>
                </td>
            </tr>
            <tr>
                <td>description</td>
                <td>Description</td>
                <td>DESIRABLE</td>
                <td>Yes</td>
                <td>
                    Description about the content. May be in <a href="https://www.loc.gov/marc/bibliographic/bd5xx.html">MARC 5xx</a> or <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/description">DC terms:description</a>
                </td>
            </tr>
            <tr>
                <td>urlPDF</td>
                <td>URL of a PDF</td>
                <td>OPTIONAL</td>
                <td>No</td>
                <td>
                    If there is a PDF version of the item
                </td>
            </tr>
            <tr>
                <td>urlOther</td>
                <td>URL of other useful version(s)</td>
                <td>OPTIONAL</td>
                <td>Yes</td>
                <td>
                    If there are other URLs for the content that may be useful - perhaps 
                    Google Books URL, or link to the catalogue record of the original
                </td>
            </tr>
            <tr>
                <td>urlIIIF</td>
                <td>URL to a IIIF manifest</td>
                <td>OPTIONAL</td>
                <td>No</td>
                <td>URL to a IIIF manifest</td>
            </tr>
            <tr>
                <td>placeOfPublication</td>
                <td>Place of publication</td>
                <td>OPTIONAL</td>
                <td>Yes</td>
                <td>May be in <a href="https://www.loc.gov/marc/bibliographic/concise/bd260.html">MARC 260 $a</a> or <a href="https://www.loc.gov/marc/bibliographic/bd264.html">MARC 264 $a</a> or <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/coverage">DC terms:coverage</a></td>
            </tr>
            <tr>
                <td>licence</td>
                <td>Licence of the material</td>
                <td>OPTIONAL</td>
                <td>No</td>
                <td>
                    May be in <a href="https://www.loc.gov/marc/bibliographic/concise/bd540.html">MARC 540</a> or <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/rights">DC terms:rights</a><br/>
                    <br/>
                    For example CC-BY
                </td>
            </tr>
            <tr>
                <td>idOther</td>
                <td>Other local or external ids</td>
                <td>OPTIONAL</td>
                <td>Yes</td>
                <td>Other identifiers such as DOIs</td>
            </tr>
            <tr>
                <td>catLink</td>
                <td>A link directly to the item's catalogue record</td>
                <td>OPTIONAL</td>
                <td>No</td>
                <td>A link to the item in your catalogue or discovery system</td>
			</tr>
			<tr>
                <td>language</td>
                <td>language of the resource</td>
                <td>OPTIONAL</td>
                <td>No</td>
                <td>May be in MARC 008 position 35-37 and/or  MARC 041.<a href="https://www.loc.gov/marc/languages/">[code list]</a> or <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/#http://purl.org/dc/terms/language">DC terms:language</a>.</td>
            </tr>
        </tbody>
    </table>
</main>