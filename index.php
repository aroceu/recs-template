<!DOCTYPE html>
<!-- :3 -->
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="initial-scale=1.0" />

        <link rel="icon" type="image/png" href="../favicon.png" />
        <link rel="stylesheet" href="../style.css" />
		
		<title>recs (template) @ magpies</title>

        <style type="text/css">

            h1{
                text-transform: lowercase;
            }

            h2{
                text-transform: lowercase;
                color: var(--accent);
                text-align: center;
                margin: 1em auto;
                font: normal 2em 'Inconsolata', monospace;
                padding-top: 1em;
            }

            em{
                color: #E9662E;
            }

            .preview-grid{
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 2rem;
                padding-bottom: 2em;
                margin-bottom: 2em;
                border-bottom: 2px dotted var(--accent);
            }

            .preview{
                text-align: center;
            }

            .preview a{
                color: var(--accent);
                font-weight: normal;
                text-transform: uppercase;
            }

            details.init{
                padding: 1em 1em 0;
            }

            details.alt{ 
                padding: 1em 1em 0em;
            }

            details.alt[open]{
                padding-bottom: 1em;
            }
            details.alt{
                background: var(--accent-light);
            }
            details[open]{
                border-bottom: none;
                margin-bottom: 0!important;
            }

            spoiler {
                background: var(--text) !important;
                color: var(--text) !important;
                cursor: pointer;
            }

            blockquote{
                background: #fff;
                padding: 1em;
                margin: 1em 0;
            }

            blockquote details {
                display: inline;
                margin: 0;
            }

            blockquote details summary {
                cursor: pointer;
                color: var(--accent);
                font-weight: bold;
                font-size: 100%;
                margin-bottom: 0;
            }

            blockquote details summary:hover {
                color: var(--accent);
                text-decoration-color: var(--accent);
                cursor: pointer;
            }

            blockquote details summary::marker {
                content: "" !important;
            }

            blockquote details summary::after {
                content: " ▶";
            }

            blockquote details[open] summary::after {
                content: " ▼";
            }

            blockquote details[open] summary {
                color: var(--meta-color);
                margin: 0;
            }

            blockquote summary{
                list-style: none;
            }

            summary:hover{
                cursor: pointer;
            }

.preview a {
    display: inline-block;
}

.preview .img-wrapper {
    position: relative;
    display: inline-block;
}

.preview .img-wrapper img {
    display: block;
}

.preview .img-wrapper::after {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: #cfe9ec; 
    opacity: 0;
    pointer-events: none; 
}

.preview a:hover .img-wrapper::after {
    opacity: 0.5;
}

a:hover, a:active, a:focus{
    box-shadow: none;
    background: #e1f5f8;
}

#footer{
    text-align: center;
    margin: 2em 0;
    padding-top: 2em;
    border-top: var(--border-size) var(--border-style) var(--accent-light);
}


            @media (max-width: 900px) {
                main {
                    padding: 0;
                    width: 95%!important;
                }
                #blurb, #footer {
                    width: 100%;
                    box-sizing: border-box;
                }
                h1 {
                    font-size: 2em;
                }
                ul, ol {
                    padding-left: 1.2em;
                }
                pre {
                    font-size: 0.95em;
                    overflow-x: auto;
                }
                aside {
                    font-size: 0.95em;
                    padding: 0.5em;
                    margin: 1em 0;
                }
            }

            @media (max-width: 600px) {
                *, html{
                    --webkit-text-size-adjust: none;
                }
                body{
                    font-size: 0.9em;
                }
                h1{
                    font-size: 1.5em;
                }
                h2{
                    font-size: 1.3em;
                }
                .preview-grid{
                    display: block;
                }
                .preview{
                    margin-bottom: 1em;
                }
                main {
                    padding: 0.5em;
                }
                pre {
                    font-size: 0.9em;
                }
                #footer p {
                    font-size: 0.95em;
                }
            }
        </style>

	</head>
	<body>

		<main>
			
            <h1>Multi-filter Rec Templates</h1>

            <div id="blurb">

                <div class="preview-grid">
                    
                <div class="preview">
                    <a href="media">
                        <span class="img-wrapper">
                            <img src="previews/media.png" alt="Media Recs Preview" />
                        </span>
                        Media Recs (Live Preview)
                    </a>
                </div>


                <div class="preview">
                    <a href="fanfiction">
                        <span class="img-wrapper">
                            <img src="previews/fanfiction.png" alt="Fanfiction Recs Preview" />
                        </span>
                        Fanfiction Recs (Live Preview)
                    </a>
                </div>

                </div>

                <details class="init"><summary><question>About</question></summary>
                        <p>These are templates for rec pages on an independent website where you can create <code>.html</code> and <code>.css</code> files (at minimum), applying filters with Javascript.</p>
                        <p>The templates have been pre-formatted for media and fanfiction recommendations in mind, but you can use them for whatever you want.</p>

                        <p>Both templates include the following features:</p>
                        <ul>
                            <li><mark>Three (3)</mark> category filters.</li>
                            <li><mark>Any</mark> (inclusive)/<mark>All</mark> (exclusive) options for users to choose how each category filter works.</li>
                            <li><mark>Clear Filters</mark> to reset all selected filters. <em>This will also toggle all filter modes back to "Any".</em></li>
                            <li>Results will automatically update based on the selected tags and filter mode, and expand/shrink per number of results.</li>
                            <li>Warnings show on click, but not by default.</li>
                            <li>A formatted field for personal thoughts on each rec.</li>
                            <li>Responsive styling for tablets and mobile devices.</li>
                        </ul>

                        <p>Primary differences are additions made to the <em>fanfiction template</em>, which are:</p>
                        <ul>
                            <li>The <mark>Medium</mark> category has been changed to a <mark>Fandom</mark> category.</li>
                            <li>Additional metadata for: <mark>Link</mark>, <mark>Author</mark>, <mark>Word Count</mark>, and <mark>Ships</mark></li>
                            <li>Rec titles use <code>&lt;h3&gt;</code> instead of <code>&lt;h2&gt;</code> (for media recs), without a border bottom.</li>
                            <li>Rec titles include a <mark>link to the work</mark>, opening in a new tab.</li>
                        </ul>
                        
                        <p>Instructions for use and customization are within the code of each webpage template, in addition to the documentation below.</p>

                </details>
                
                <details class="alt"><summary><question>Installation</question></summary>

                    <ol>
                        <li>Go to the template for <a href="media">media recs</a> or <a href="fanfiction">fanfiction recs</a>, depending on which template
                        you would like to use. You may use both.</li>
                        <li>On the template webpage, right click and select <em>View Page Source</em>.</li>
                        <li>Copy the entire page/file of what comes up. Save it in a <code>.html</code> file. This may be a local file or a file on your Neocities/Nekoweb site. Name it whatever you want.</li>
                        <li>Open the <code>.html</code> file in a text editor (or your host's in-browser text editor), and modify it to your heart's content with your own text. </li>
                        <li>Manually add and order labels for your rec filters in each category, under <code>&lt;div class="filters"&gt;</code>. See <strong>Basic Customizations</strong> for more detail.
                            <pre>&lt;label&gt;&lt;input type="checkbox" name="<font color="red">category</font>" value="<font color="red">Tag</font>"&gt; <font color="red">Tag (display text)</font>&lt;/label&gt;</pre></li>
                        <li>I advise you to not remove or modify the <strong>rating</strong> tags, as they are pretty standard. For media recs, you may also only want to do minimal edits to <strong>medium</strong> depending on what you are recommending.</li>
                        <li>In the code, find and follow <code>/** Below are my recs. Delete them and replace with your own. (You can delete this line as well) **/</code></li>
                        <li>See <strong>Basic Customizations</strong> below to add your own recs. Once you've added them, you're mostly done with the <code>.html</code> file. (Some exceptions may apply.)</li>
                        <li>Now, go to the rec templates' <a href="style.css">style.css</a> and copy/paste everything into your own <code>style.css</code> file. Save it in the same folder as your <code>.html</code> file.</li>
                            <ul><li><strong>Note:</strong> Both the media and the fanfiction templates use the same <code>style.css</code>, so you only need one if you are using both templates and want them to feature the same colors/styling.</li>
                            <li>If you would like them to be different, see <strong>Advanced Customizations</strong>.</li></ul>
                        <li>In <code>style.css</code>, modify the variables under <code>:root{}</code> to reflect colors, fonts, and other styles you prefer. This is not necessary if you would like your page to be styled like the preview.</li>             
                        </ol>

                    <p>You can also download the files from <a href="">Github</a>.</p>

                    <p><code>&lt;spoiler&gt;</code> is supported as well, and will black out text when used <spoiler>like this</spoiler> (highlight to view).</p>

                </details>

                <details class="init"><summary><question>Basic Customizations</question></summary>

                <p>This will cover:</p>

                    <ul>
                        <li><a href="#basic-filter-tags">Customizing filter tags (step 5)</a></li>
                        <li><a href="#basic-add-recs">Adding/editing recs (step 7/8)</a></li>
                    </ul>

                <h2 id="basic-filter-tags">Customizing Filter Tags (step 5)</h2>

                    <p>This is for customizing the filterable tags inside <code>&lt;div class="filters"&gt;</code></p>

                    <p>The standard format for each tag label is as such:</p>

                    <pre>&lt;label&gt;&lt;input type="checkbox" name="<font color="red">category</font>" value="<font color="red">Tag</font>"&gt; <font color="red">Tag (display text)</font>&lt;/label&gt;</pre>

                    <ul>
                        <li><em>Capitalization matters</em> for all text.</li>
                        <li><code>name=""</code> is the name of the filter category, such as <code>fandom</code>, <code>medium</code>, <code>trope</code>, and <code>rating</code>. By default, they are in lowercase. I suggest keeping them that way for code readability.</li>
                        <li>Keep <code>value=""</code> and the <code>display text</code> identical or similar for ease of use.</li>
                        <li>Make sure there is a space between the closing angle bracket <code>&gt;</code> and the display text: <pre>&lt;input ... value="<font color="red">Tag</font>"&gt;<mark>&nbsp;</mark><font color="red">Tag (display text)</font></pre></li>
                    </ul>

                    <p>For example:</p>
                            <pre>&lt;label&gt;&lt;input type="checkbox" name="<font color="blue">fandom</font>" value="<font color="blue">Brooklyn 99</font>"&gt; <font color="blue">Brooklyn 99</font>&lt;/label&gt;</pre>
                            <pre>&lt;label&gt;&lt;input type="checkbox" name="<font color="limegreen">trope</font>" value="<font color="limegreen">Fake Dating</font>"&gt; <font color="limegreen">Fake Dating</font>&lt;/label&gt;</pre>

                    <p>However, for linguistic purposes you may want the display text to be pluralized, such as "TV Shows" instead of "TV Show".

                    <pre>&lt;label&gt;&lt;input type="checkbox" name="<font color="red">medium</font>" value="<font color="red">TV Show</font>"&gt; <font color="red">TV Show<mark>s</mark></font>&lt;/label&gt;</pre>

                    <p>What is important here is the <code>value</code> of <font color="red">TV Show</font>.
                    When listing a rec for this filter, the tag must be identical to the <code>value</code>, not the display text ("TV Show<mark>s</mark>"). The label display text is what is seen for visitor readability, but does not affect the filters or rec metadata in any way.</p>

                    <pre>{
title: "White Collar",
mediums: ["<font color="red">TV Show</font>"],
...</pre>

                <h2 id="basic-add-recs">Recs (steps 7/8)</h2>

                <p>Recs are added as cards through Javascript. The code for the metadata is in the following formats:</p>

                <p><strong>Media:</strong></p>
                                       
                        <pre>{
title: "Title",
mediums: ["Medium"],
tropes: ["Trope 1", "Trope 2"],
ratings: ["Rating"],
warnings: "Warnings here.",
summary: "&lt;p&gt;Summary here. If your summary contains double quotes, place a backslash \ before it, like \"this\".&lt;/p&gt;",
thoughts: "Write your thoughts about the rec here." 
},</pre>

                <p><strong>Fanfiction:</strong></p>

                      
                        <pre>{
title: "Work Title",
link: "https://work.link",
author: "Author",
wordCount: "Word count, any format",
fandoms: ["Fandom Name"],
ships: "Ship, any format",
tropes: ["Trope 1", "Trope 2"],
ratings: ["Rating"],
warnings: "",
summary: "&lt;p&gt;Summary here. If your summary contains double quotes, place a backslash \ before it, like \"this\".&lt;/p&gt;",
thoughts: "Write your thoughts about the rec here." 
},</pre>
                    <p><strong>Keep in mind:</strong></p>
                        <ul>
                            <li>The <code>title</code>, <code>link</code>, <code>author</code>, <code>wordCount</code>, <code>ships</code>, <code>warnings</code>, <code>summary</code>, and <code>thoughts</code> fields must be in double quotes <code>""</code>. These fields support basic HTML, like <code>&lt;p&gt;</code>, <code>&lt;em&gt;</code>, <code>&lt;a&gt;</code> and <code>&lt;strong&gt;</code>.</li>
                            <li>Fanfiction rec titles are automatically linked to the URL provided in the <code>link</code> field, so do not add any additional <code>&lt;a&gt;</code> tags in the <code>title</code> or <code>link</code> field. The link must be in double quotes <code>""</code> here as well.</li>
                            <li>Fields for each filterable category (<code>medium</code>, <code>fandoms</code>, <code>tropes</code>, <code>ratings</code>) must match the exact <code>value</code> of the corresponding filter tag, <em>including spaces, punctuation, and capitalization</em>.</li> 
                            <li>The exact field <strong>value</strong> for each filterable category of an item will display, which is why it is easier to make the <code>value</code> and the <code>display text</code> for the tag identical in the filter navigation.</li>
                            <li>Fields for each filterable category (see above) must be in double quotes <code>""</code>, with the entire field in brackets <code>[]</code>.</li>
                            <li>Each field must end with a comma <code>,</code> <em>outside</em> of all brackets and quotes.</li>
                            <li>If there are no warnings, leave the field empty <code>""</code> and "None" will be displayed automatically.</li>
                            <li><code>thoughts</code> is optional and can be omitted if not needed. You may also keep the field but leave it empty <code>""</code>. It will not display either way.</li>
                            <li>The entire rec must be inside curly brackets <code>{}</code>, and end with a comma <code>,</code> outside of the closing curly bracket.</li>
                        </ul>
                    </ol>

                    <p>The list of recs stops with the in-line comment <code>/** END OF RECS **/</code>.</p> 
                    
                    <p>Unless you are doing <strong>Advanced Customizations</strong>, do NOT delete or modify anything below this comment.</p>

                </details>

                <details class="alt"><summary><question>Advanced Customizations</question></summary>

                <p>This will cover:</p>

                <ul>
                    <li><a href="#advanced-filter-categories">Customizing filter categories</a></li>
                    <li><a href="#advanced-rec-formatting">Customizing rec formatting</a></li>
                    <li><a href="#advanced-filter-modes">Removing or allowing category filter modes (any/all logic options)</a></li>
                    <li><a href="#advanced-template-styling">Using both templates with different styling</a></li>
                </ul>

                <p>For best results, pay attention to the text colors across the examples below.</p>

                <h2 id="advanced-filter-categories">Customizing Filter Categories</h2>

                <p>The filter navigation section begins with <code>&lt;div id="filters"&gt;</code> and ends with the <code>&lt;/div&gt;</code> right before <code>&lt;div id="results"&gt;</code>.</p>

                <p>Each filter category box is contained in code that looks like the following:</p>

                <pre>&lt;fieldset&gt;
        &lt;legend&gt;<strong>Medium</strong>&lt;/legend&gt;
        &lt;div class="filter-header"&gt;
            &lt;span class="legend"&gt;<strong>Medium</strong>&lt;/span&gt;
          ...
        &lt;/div&gt;
        &lt;div class="filter-options"&gt;
          &lt;label&gt;&lt;input type="checkbox" name="<strong>medium</strong>" value="Animanga"&gt; Anime/Manga&lt;/label&gt;
          &lt;label&gt;&lt;input type="checkbox" name="<strong>medium</strong>" value="Book"&gt; Books&lt;/label&gt;
          &lt;label&gt;&lt;input type="checkbox" name="<strong>medium</strong>" value="Comics"&gt; Comics&lt;/label&gt;
          &lt;label&gt;&lt;input type="checkbox" name="<strong>medium</strong>" value="Movie"&gt; Movies&lt;/label&gt;
          &lt;label&gt;&lt;input type="checkbox" name="<strong>medium</strong>" value="TV"&gt; TV Shows&lt;/label&gt;
          &lt;label&gt;&lt;input type="checkbox" name="<strong>medium</strong>" value="Video Games"&gt; Video Games&lt;/label&gt;
        &lt;/div&gt;
&lt;/fieldset&gt;</pre>

                <p>The above code is the example for the <strong>Medium</strong> category, on the media recs template.</p>

                <p>If there is a category you do not need, you may delete everything within (and including) the <code>&lt;fieldset&gt;</code> for
                the corresponding category. The remaining categories will expand to fill out the space. 
                However, I heavily advise having at minimum two categories and no more than four, for best results.</p>

                <p>The default template filter categories are <strong>Medium</strong> (for media), <strong>Fandom</strong> (for fanfiction), <strong>Tropes/Genres</strong> (labeled as "tropes"), and <strong>Ratings</strong>.</p> 
                
                <p>You may choose to change these categories based on personal use cases for your recs and organization. 
                    For example, if you are recommending fic for only one fandom, you may want to remove the <strong>Fandom</strong> filter category, and/or change it into a different category, such as <strong>Ships</strong>.
                </p>

                <p>In order to do this, you will need to add or change:</p>
                <ul>
                    <li>The legend display text (<code>&lt;legend&gt;</code> does not display, but is for accessibility purposes and best kept consistent so you don't get confused):
                        <pre>&lt;legend&gt;<font color="red">Ships</font>&lt;/legend&gt;

        &lt;div class="filter-header"&gt;
          &lt;span class="legend"&gt;<font color="red">Ships</font>&lt;/span&gt;</pre></li>
                    <li>The <code>name</code> attribute of each filter label input, as well as their corresponding <code><font color="hotpink">value</font></code> and <code><font color="hotpink">display text</font></code>: 
                    <pre>&lt;label&gt;&lt;input type="checkbox" name="<font color="red">ship</font>" value="<font color="hotpink">Oliver/Barry</font>"&gt; <font color="hotpink">Oliver/Barry</font>&lt;/label&gt;
&lt;label&gt;&lt;input type="checkbox" name="<font color="red">ship</font>" value="<font color="hotpink">Cisco/Hartley</font>"&gt; <font color="hotpink">Cisco/Hartley</font>&lt;/label&gt;</pre></li>
                    <li>The <code>name</code> of the <code>filter-mode</code>, if the category is to have any/all filter options: <pre>&lt;label&gt;&lt;input type="radio" name="<font color="red">ship</font>Mode" value="inclusive" checked&gt; Any&lt;/label&gt;</pre>
                This is the example for only the "Any" option - you will need to make the same changes for the "All" option as well.</li>
                </ul>

                <p>The result may look something like this:</p>

                <pre>&lt;fieldset&gt;
        &lt;legend&gt;<font color="red">Ships</font>&lt;/legend&gt;
        &lt;div class="filter-header"&gt;
            &lt;span class="legend"&gt;<font color="red">Ships</font>&lt;/span&gt;
            &lt;span class="filter-mode"&gt;
                &lt;label&gt;&lt;input type="radio" name="<font color="red">ship</font>Mode" value="inclusive" checked&gt; Any&lt;/label&gt;
                &lt;label&gt;&lt;input type="radio" name="<font color="red">ship</font>Mode" value="exclusive"&gt; All&lt;/label&gt;
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="filter-options"&gt;
          &lt;label&gt;&lt;input type="checkbox" name="<font color="red">ship</font>" value="<font color="hotpink">Oliver/Barry</font>"&gt; <font color="hotpink">Oliver/Barry</font>&lt;/label&gt;
          &lt;label&gt;&lt;input type="checkbox" name="<font color="red">ship</font>" value="<font color="hotpink">Cisco/Hartley</font>"&gt; <font color="hotpink">Cisco/Hartley</font>&lt;/label&gt;
        &lt;/div&gt;
&lt;/fieldset&gt;</pre>

                <p>Additionally, in each rec card, the new or changed field will need to be formatted as a filterable tag with brackets <code>[]</code>, with each item in double quotes <code>""</code> and separated by commas <code>,</code>:

                    <pre>{...
ships: ["Oliver/Barry", "Cisco/Hartley"],
...}
                    </pre>

                <p>You will also need to make the following modifications in the Javascript:</p>

                <ol>
                    <li>After <code>&lt;/main&gt;</code>, find this line. You will be working within/beneath it:</li>
                        <pre>&lt;script&gt;</pre>
                    <li>Locate <code>const filters = {</code>. Beneath it, in the curly brackets <code>{}</code>, add (or edit the category you're replacing) the following line: <pre><font color="red">ship</font>: new Set(),</pre></li>
                    <li>If the new/changed field is to have <strong>any/all</strong> filter options:</li>
                        <ol>
                            <li>Locate <code>modes: {</code>. Within the curly bracket <code>{}</code>, add or edit to: <pre><font color="red">ship:</font>"inclusive",</pre></li>
                            <li>Down a few lines, locate <code>resetBtn.addEventListener("click", () => {</code>. Within the curly bracket <code>{}</code>, add or edit to: <pre>filters.<font color="red">ship</font>.clear();</pre></li>
                            <li>In the same curly brackets, add or edit to: <pre>filters.modes.<font color="red">ship</font> = "inclusive";</pre></li>
                            <li>Further down, locate: <pre>function applyFilters() {
      const filteredItems = items.filter(item =&gt;</pre> After <code>item =&gt;</code>, add or edit to: <pre>matchesFilter(filters.<font color="red">ship</font>, item.<font color="blue">ships</font>, filters.modes.<font color="red">ship</font>) <em>&&</em></pre>
                            If this code is <strong>not</strong> at the end of this list, make sure <code>&&</code> is at the end of the line. If it is at the end of this list, then leave it off.</li>
                        </ol>
                </ol>

                <p>With Ships added as a filter (and none removed), your code should now look something like this:</p>

                <pre>const filters = {
    fandom: new Set(),
    trope: new Set(),
    rating: new Set(),
    <font color="red">ship: new Set(),</font>
      modes: {
        fandom: "inclusive",
        trope: "inclusive",
        rating: "inclusive",
        <font color="red">ship: "inclusive"</font>
      }
    };

    const resetBtn = document.getElementById("resetFilters");

    resetBtn.addEventListener("click", () => {
      // 1. Clear JS filter state
      filters.fandom.clear();
      filters.trope.clear();
      filters.rating.clear();
      <font color="red">filters.ship.clear();</font>

      filters.modes.fandom = "inclusive";
      filters.modes.trope = "inclusive";
      filters.modes.rating = "inclusive";
      <font color="red">filters.modes.ship = "inclusive";</font>
      
      ...
      ...
      ...
    });

    function applyFilters() {
      const filteredItems = items.filter(item =>
        matchesFilter(filters.fandom, item.fandoms, filters.modes.fandom) &&
        matchesFilter(filters.trope, item.tropes, filters.modes.trope) &&
        matchesFilter(filters.rating, item.ratings, filters.modes.rating) &&
        <font color="red">matchesFilter(filters.ship, item.<font color="blue">ships</font>, filters.modes.ship)</font>
      );

      ...</pre>

                <p><code>item.<font color="blue">ships</font></code> (above) corresponds to the label within the category in the rec card:</p>

                <pre>{...
<font color="blue">ships</font>: ["Oliver/Barry", "Cisco/Hartley"],
...}</pre>

<p>The singular <code><font color="red">ship</font></code> corresponds to the category filter, while the plural <code><font color="blue">ships</font></code> corresponds to the labels within the rec data.</p> 

<p>The rec formatting instructions below show how they are linked.</p>

                <h2 id="advanced-rec-formatting">Customizing Rec Formatting</h2>

                <p>Within the Javascript, rec metadata can be listed in any order. This will not affect the frontend display.</p>

                <p>If you would like to change the frontend display formatting, order, or text, find <code>card.innerHTML = `</code> at the bottom of the Javascript code. Reorganize or change the HTML to your liking.</p>
                
                <pre>card.innerHTML = `
    &lt;h3&gt;&lt;a href="${item.link}" target="_blank"&gt;${item.title}&lt;/a&gt;&lt;/h3&gt;
    &lt;div class="meta"&gt;&lt;strong&gt;Author:&lt;/strong&gt; ${item.author}
    &lt;br /&gt;<font color="red">&lt;strong&gt;Link:&lt;/strong&gt; &lt;a href="${item.link}" target="_blank"&gt;${item.link}&lt;/a&gt;</font>
    &lt;br /&gt;<font color="red">&lt;strong&gt;Events:&lt;/strong&gt; ${item.<font color="blue">events</font> || "None"}</font>
    &lt;br /&gt;&lt;strong&gt;Fandom:&lt;/strong&gt; ${item.fandoms.join(", ")}
    &lt;br /&gt;&lt;strong&gt;Ships:&lt;/strong&gt; <font color="red">${item.<font color="blue">ships</font>.join(", ")}</font>
    &lt;br /&gt;&lt;strong&gt;Rating:&lt;/strong&gt; ${item.ratings.join(", ")}
    &lt;br /&gt;&lt;strong&gt;Word Count:&lt;/strong&gt; ${item.wordCount || "<font color="red">N/A</font>"}
    &lt;br /&gt;&lt;details&gt;&lt;summary&gt;Warnings&lt;/summary&gt; ${item.warnings || "None"}&lt;/details&gt;
    &lt;/div&gt;
    &lt;div class="summary"&gt;<font color="red">&lt;strong&gt;Summary:&lt;/strong&gt;</font> ${item.summary}&lt;/div&gt;
    ${item.thoughts ? `&lt;div class="thoughts"&gt;&lt;strong&gt;<font color="red">My thoughts and feelings:</font>&lt;/strong&gt; ${item.thoughts}&lt;/div&gt;` : ''}
`;</pre>

<p>Above is an example of a modified (not the default) rec format that: </p>
                    
                    <ul>
                    <li>Displays the link as a separate field in addition to being linked in the title.</li>
                    <li>There is a new <em>non-filterable field</em> for <strong>Events</strong>.</li>
                    <li>Filters by ships.</li> 
                    <li>No longer lists tropes.</li>
                    <li>Empty word count has been changed to return <code>N/A</code>.</li>
                    <li>Word count is now placed right above the warnings.</li>
                    <li>Summary is now prepended with a label of <strong>Summary:</strong></li>
                    <li>The <strong>thoughts</strong> label has been changed to now display <strong>My thoughts and feelings:</strong>.</li>
                    </ul>

    <p>Other things to keep in mind:</p>

          <ul>
            <li>If a new <strong>filter category</strong> was changed or added, the display for the field must be <code>${item.<font color="red">category</font>.join(", ")}</code>, such as the Ships field above.</li>
            <li>If you have added a new field but <strong>not</strong> as a filter category, the display for the field must be <code>${item.<font color="red">category</font>}</code>, such as <code>${item.events}</code> or <code>${item.author}</code> field above.</li>
            <li>If display text for an empty field is not defined, it will display as <strong>undefined</strong> when empty, unless a default value is provided using the <code>||</code> operator, such as <code>${item.events || "None"}</code>.</li>
            <li>In the Javascript code for each rec metadata, technically no field is required. However, deleting or leaving certain fields empty may output unexpected results if the HTML has not also been modified in some way as well.</li>
        </ul>
    <p>Here is a modified rec metadata example, as well as its sample output using the modified HTML format above:</p>
            <pre>{
  title: "Throw All Your Walls (Into the Fire)",
  link: "https://archiveofourown.org/works/10680495",
  author: "TornThorn",
  <font color="blue">events:</font> "<font color="limegreen">Event Name</font>",
  wordCount: "2546",
  fandoms: ["The Flash", "Arrow (TV)"],
  <font color="blue">ships:</font> <font color="red">["Oliver/Barry"]</font>,
  ratings: ["General"],
  warnings: "",
  summary: "Taking a sip of the new beer the bartender handed him, Barry decided he would finish the bottle, try to find Thea and give her a quick hug, then head home for the night.",
}</pre>
<blockquote>
    <h3><a href="https://archiveofourown.org/works/10680495" target="_blank">Throw All Your Walls (Into the Fire)</a></h3>
    <div class="meta"><strong>Author:</strong> TornThorn
    <br /><strong>Link:</strong> <a href="https://archiveofourown.org/works/10680495" target="_blank">https://archiveofourown.org/works/10680495</a>
    <br /><strong>Events:</strong> Event Name
    <br /><strong>Fandom:</strong> The Flash, Arrow (TV)
    <br /><strong>Ships:</strong> Oliver/Barry
    <br /><strong>Rating:</strong> General
    <br /><strong>Word Count:</strong> 2546
    <br /><details><summary>Warnings</summary> None</details>
    </div>
    <div class="summary"><strong>Summary:</strong> Taking a sip of the new beer the bartender handed him, Barry decided he would finish the bottle, try to find Thea and give her a quick hug, then head home for the night.</div>
</blockquote>
</li>
          </ul>

          <p>Note that <code><font color="blue">events</font></code> in the rec metadata code matches <code>${item.<font color="blue">events</font> || "None"}</code> in the earlier modified HTML.</p>
        <p>If it was a filterable field, it would match a corresponding 
            <pre>matchesFilter(filters.<font color="red">event</font>, item.<font color="blue">events</font>, filters.modes.<font color="red">event</font>)</pre>
         where the label for the event within the filters would look like: </p>
        <pre>&lt;label&gt;&lt;input type="checkbox" name="<font color="red">event</font>" value="<font color="limegreen">Event Name</font>"&gt; <font color="limegreen">Event Name</font>&lt;/label&gt;</pre>

        <p>However, non-filtered fields such as <code>title</code> or <code>author</code> only have to be defined in:</p>
        <ul>
            <li>The HTML template for displaying the recs <pre>card.innerHTML = `
&lt;h3&gt;&lt;a href="${item.link}" target="_blank"&gt;${item.title}&lt;/a&gt;&lt;/h3&gt;
&lt;div class="meta"&gt;&lt;strong&gt;Author:&lt;/strong&gt; ${item.author}
...`</pre></li>
            <li>The metadata for the rec card <pre>{ 
title: "Throw All Your Walls (Into the Fire)", 
link: "https://archiveofourown.org/works/10680495",
author: "TornThorn",
...},</pre></li>
        </ul>

            <h2 id="advanced-filter-modes">Remove or allow category filter modes (any/all logic options)</h2>

            <p>In each <code>&lt;fieldset&gt; &lt;div class="filter-header"&gt;</code>, the HTML code to allow "Any"/"All" options for users looks like this:</p>

            <pre>
    &lt;fieldset&gt;
        &lt;legend&gt;<u>Category</u>&lt;/legend&gt;

        &lt;div class="filter-header"&gt;
          &lt;span class="legend"&gt;<u>Category</u>&lt;/span&gt;
          <strong><font color="limegreen">&lt;span class="filter-mode"&gt;
            &lt;label&gt;&lt;input type="radio" name="<u>category</u>Mode" value="inclusive" checked&gt; Any&lt;/label&gt;
            &lt;label&gt;&lt;input type="radio" name="<u>category</u>Mode" value="exclusive"&gt; All&lt;/label&gt;
          &lt;/span&gt;</font></strong>
        &lt;/div&gt;
        &lt;div class="filter-options"&gt;
            &lt;label&gt;&lt;input type="checkbox" name="<u>category</u>" value="<font color="hotpink">Tag</font>"&gt; <font color="hotpink">Tag</font>&lt;/label&gt;
            ...
        &lt;/div&gt;
    &lt;/fieldset&gt;
</pre>

        <p>The entire <code>&lt;span class="filter-mode"&gt;</code> must be inside <code>&lt;div class="filter-header"&gt;</code> and after <code>&lt;span class="legend"&gt; &lt;/span&gt;</code> to display properly.</p>

        <p>To remove it, simply delete <code>&lt;span class="filter-mode"&gt;</code> to the end of its <code>&lt;/span&gt;</code>. This is everything in <code><strong><font color="limegreen">green bold text</font></strong></code> above.</p> 
        
        <p>If you are adding the option to a new or custom category:</p>
        
        <ol><li>Complete all of the steps for the corresponding category following the <strong>"Customizing Filter Categories"</strong> section above.</li>
        <li>Then, inside <code>&lt;span class="filter-mode"&gt;&lt;/span&gt;</code>, change <code><strong><font color="limegreen"><u>category</u>Mode</font></strong></code> to the name of your new or custom category.</li>
        <li>The resulting code will look something like this:</li>
    <pre>&lt;fieldset&gt;
        &lt;legend&gt;<font color="limegreen">Ships</font>&lt;/legend&gt;

        &lt;div class="filter-header"&gt;
          &lt;span class="legend"&gt;<font color="limegreen">Ships</font>&lt;/span&gt;
          <strong><font color="limegreen">&lt;span class="filter-mode"&gt;
            &lt;label&gt;&lt;input type="radio" name="<u>ship</u>Mode" value="inclusive" checked&gt; Any&lt;/label&gt;
            &lt;label&gt;&lt;input type="radio" name="<u>ship</u>Mode" value="exclusive"&gt; All&lt;/label&gt;
          &lt;/span&gt;</font></strong>
        &lt;/div&gt;
        &lt;div class="filter-options"&gt;
            &lt;label&gt;&lt;input type="checkbox" name="<font color="limegreen">ship</font>" value="<font color="hotpink">Oliver/Barry</font>"&gt; <font color="hotpink">Oliver/Barry</font>&lt;/label&gt;
            ...
        &lt;/div&gt;
    &lt;/fieldset&gt;</pre></li>
        </ol>

        <p>Note that Ratings have <code>&lt;span class="filter-mode"&gt;</code> commented out in order not to display the any/all option, due to the nature of ratings. 
        However, if you want to allow this option, making <code>filter-mode</code> visible will still functionally work.</p>

        <p>If you choose to replace Ratings with another category instead, make sure that all <code><strong>rating</strong>(<strong>s</strong>)</code> under <code>&lt;script&gt;</code> are updated for your replacement category as well.</p>

        <h2 id="advanced-template-styling">Using both templates with different styling</h2>

        <p>There are many ways you could use both templates with different styling, so I will not cover them all in detail here.</p>

        <p>Some options are:</p>

            <ul>
                <li><strong>Use different folders for each rec page.</strong> This will require you to download <code>style.css</code> <em>twice.</em> You can then put a <code>style.css</code> in each respective folder,
                and the webpage will call for the <code>style.css</code> within its respective folder. </li>
                <li><strong>Name each <code>.css</code> file something different</strong>. This will require you to download <code>style.css</code> <em>twice</em>. 
                You will also have to modify <code>&lt;link rel="stylesheet" href="style.css" /&gt;</code> at the top of each rec page, based on what you named the CSS file:
                <pre>&lt;link rel="stylesheet" href="<font color="red">fic-rec-style.css</font>" /&gt;</pre></li>
                <li><strong>Download <code>style.css</code> once, but add root definitions in the <code>.html</code> file of each rec page.</strong> You may not need to touch the <code>style.css</code> if you use this solution.
                        <p>In order to do this:</p>
                        <ol>
                            <li>In the <code>.html</code> file of each rec page, right below <code>&lt;link rel="stylesheet" href="style.css" /&gt;</code>, add: 
                            <pre>&lt;style type="text/css"&gt;
&lt;/style&gt;</pre></li>
                            <li>This must be called <em>after</em> <code>&lt;link rel="stylesheet" href="style.css" /&gt;</code> or else it won't work.</li>
                            <li>Within <code>&lt;style type="text/css"&gt; &lt;/style&gt;</code>, copy and paste all of the root definitions from your <code>style.css</code> file (everything under <code>:root{}</code>), though you can omit the calculations.</li>
                            <li>Customize the colors, fonts, sizes, etc. for the rec page in this block.</li>
                            <li>Do this for each individual rec page.</li> 
                            <li>Any styling rules not defined on the webpage will inherit the values from <code>style.css</code>, so if there are styles you want to keep across all rec pages, you can omit the lines from the webpage <code>&lt;style&gt;</code> block.</li> 
                            <li>Define shared rules in <code>style.css</code> if they need to be changed from the default.</li>
                            <ul><li>For example, if you want to keep the default white body background color, you can delete <code>--body-background: #fff;</code> from the <code>&lt;style&gt;</code> block, since it is already defined in <code>style.css</code>.</li></ul>
                        </ol>
                <pre>...
                    
&lt;link rel="stylesheet" href="style.css" /&gt;
  
&lt;style type="text/css"&gt;
    :root {    
    --body-background: #282828;
    --main-background: #000000; 
    --card-background: #2b0300; 
    --legend-background: var(--card-background); 
    --thoughts-background: #000000; 
    --text: #ffffff;
    --meta-color: #e5e5e5; 
    --link-hover: var(--text); 
    --accent: #b81616; 
    --accent-dark: #974444; 
    --accent-light: #fae9e9; 
    --border-color: var(--accent); 
    --highlight-color: #ecaeae; 
    
    --main-font: 'Georgia';
    --h1-font: 'Georgia';
    --legend-font: monospace;
    --button-font: 'Georgia'; 
    --rec-header-font: monospace; 
    
    --main-border-style: dotted;
    --link-border-style: wavy;
    
    --line-height: 160%;
    --main-width: 80em; 
    --card-width: 15em; 
    --border-size: 1px;
    --h1-size: 2.2em;
    --rec-header-size: 1.5em;
    --legend-font-size: 1.2em;
    --button-text-size: 0.8em; 
    --max-legend-size: 25em; 
    --label-size: 0.8em;
  }
&lt;/style&gt;

...</pre>
            </ul>

            <p>Below is a preview of the customized styles defined above applied to the fanfiction rec template:</p>

            <p><img src="previews/fanfiction-custom.png" alt="Preview of customized fanfiction rec template"></p>
    

            </details>
            
            <details class="init"><summary>Further Notes</summary>

            <p>The stylesheet as well as the previews are available on <a href="https://github.com/aroceu/recs-template">Github</a>.</p>

            <p>You might be interested in the <a href="../masterlist/">masterlist template</a> I made. The masterlist template only allows
            one filter at a time instead of multiple.</p> 

            <p>If you need support for this code, please feel free to <a href="https://aroceu.com/">contact me</a>.</p>

            <p>This site is part of <a href="../">magpies</a>, my index of fannish webpage resources.</p>

            </details>

            </div>

            <div id="footer">

            <p><?php echo date('Y'); ?> &hearts; A <a href="https://fan.kingdra.net/">kingdra.net</a> production </p>
            </div>

            </main>

	</body>
</html>
