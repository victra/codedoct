<style>
	/* CSS Prism Syntax Highlighter */
pre {
    padding: 50px 10px 10px 10px;
    margin: .5em 0;
    white-space: pre;
    word-wrap: break-word;
    overflow: auto;
    background-color: #F3F5F7;
    position: relative;
    border-radius: 4px;
    max-height: 500px;
    border: 1px solid #D3D3D3;
}

pre::before {
    font-size: 16px;
    content: attr(title);
    position: absolute;
    top: 0;
    background-color: #eee;
    padding: 10px;
    left: 0;
    right: 0;
    color: #fff;
    text-transform: uppercase;
    display: block;
    margin: 0 0 15px 0;
    font-weight: bold;
}

pre::after {
    content: 'Jangan biasakan copy-paste';
    padding: 2px 10px;
    width: auto;
    height: auto;
    position: absolute;
    right: 8px;
    top: 8px;
    color: #fff;
    line-height: 20px;
    transition: all 0.3s ease-in-out;
}

pre:hover::after {
    opacity: 0;
    top: -8px;
    visibility: visible;
}

code {
    font-family: Consolas,Monaco,'
    Andale Mono','Courier New',Courier,Monospace;
    line-height: 16px;
    color: #88a9ad;
    background-color: transparent;
    padding: 1px 2px;
    font-size: 12px;
}

pre code {
    display: block;
    background: none;
    border: none;
    color: #9d9d9d;
    direction: ltr;
    text-align: left;
    word-spacing: normal;
    padding: 0 0;
    /*font-weight: bold;*/
}

code .token.punctuation {
    color: #ccc;
}

pre code .token.punctuation {
    color: #fafafa;
}

code .token.comment,code .token.prolog,code .token.doctype,code .token.cdata {
    color: #777;
}

code .namespace {
    opacity: .8;
}

code .token.property,code .token.tag,code .token.boolean,code .token.number {
    color: #e5dc56;
}

code .token.selector,code .token.attr-name,code .token.string {
    color: #88a9ad;
}

pre code .token.selector,pre code .token.attr-name {
    color: #fafafa;
}

pre code .token.string {
    color: #40ee46;
}

code .token.entity,code .token.url,pre .language-css .token.string,pre .style .token.string {
    color: #ccc;
}

code .token.operator {
    color: #1887dd;
}

code .token.atrule,code .token.attr-value {
    color: #009999;
}

pre code .token.atrule,pre code .token.attr-value {
    color: #1baeb0;
}

code .token.keyword {
    color: #e13200;
    font-style: italic;
}

code .token.comment {
    font-style: italic;
}

code .token.regex {
    color: #ccc;
}

code .token.important {
    font-weight: bold;
}

code .token.entity {
    cursor: help;
}

pre mark {
    background-color: #ea4f4e!important;
    color: #fff!important;
    padding: 2px;
    border-radius: 2px;
}

code mark {
    background-color: #ea4f4e!important;
    color: #fff!important;
    padding: 2px;
    border-radius: 2px;
}

pre code mark {
    background-color: #ea4f4e!important;
    color: #fff!important;
    padding: 2px;
    border-radius: 2px;
}

.comments pre {
    padding: 10px 10px 15px 10px;
    background: #2c323c;
}

.comments pre::before {
    content: 'Code';
    font-size: 13px;
    position: relative;
    top: 0;
    background-color: #f56954;
    padding: 3px 10px;
    left: 0;
    right: 0;
    color: #fff;
    text-transform: uppercase;
    display: inline-block;
    margin: 0 0 10px 0;
    font-weight: bold;
    border-radius: 4px;
    border: none;
}

.comments pre::after {
    font-size: 11px;
}

.comments pre code {
    color: #eee;
}

.comments pre.line-numbers {
    padding-left: 10px;
}

pre.line-numbers {
    position: relative;
    padding-left: 4em;
    counter-reset: linenumber;
}

pre.line-numbers > code {
    position: relative;
}

.line-numbers .line-numbers-rows {
    /*height: 100%;*/
    position: absolute;
    pointer-events: none;
    top: 0;
    font-size: 100%;
    left: -3.8em;
    width: 3em;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    padding: 0;
    letter-spacing: -1px;
	border-right: 1px solid #999;
}

.line-numbers-rows > span {
    pointer-events: none;
    display: block;
    counter-increment: linenumber;
}

.line-numbers-rows > span:before {
    content: counter(linenumber);
    color: #999;
    display: block;
    padding-right: 0.8em;
    text-align: right;
    transition: 350ms;
}

pre[data-codetype='PHPku']:before {
    background-color: #00a1d6;
}

pre[data-codetype='CSSku']:before {
    background-color: #00a1d6;
}

pre[data-codetype='HTMLku']:before {
    background-color: #00a1d6;
}

pre[data-codetype='JavaScriptku']:before {
    background-color: #00a1d6;
}

pre[data-codetype='JQueryku']:before {
    background-color: #00a1d6;
}
</style>

<script src='https://arlina-design.googlecode.com/svn/prism.js' type='text/javascript'/>

<script>
$('pre').attr('class', 'line-numbers');
Prism.hooks.add("after-highlight",function(e){var t=e.element.parentNode;if(!t||!/pre/i.test(t.nodeName)||t.className.indexOf("line-numbers")===-1){return}var n=1+e.code.split("\n").length;var r;lines=new Array(n);lines=lines.join("<span></span>");r=document.createElement("span");r.className="line-numbers-rows";r.innerHTML=lines;if(t.hasAttribute("data-start")){t.style.counterReset="linenumber "+(parseInt(t.getAttribute("data-start"),10)-1)}e.element.appendChild(r)})
</script>

<script type='text/javascript'>
var pres = document.getElementsByTagName(&quot;pre&quot;);
for (var i = 0; i &lt; pres.length; i++) {
  pres[i].addEventListener(&quot;dblclick&quot;, function () {
    var selection = getSelection();
    var range = document.createRange();
    range.selectNodeContents(this);
    selection.removeAllRanges();
    selection.addRange(range);
  }, false);
}
</script>

<!-- nomor baris -->
<script>
$('pre').attr('class', 'line-numbers');
Prism.hooks.add("after-highlight",function(e){var t=e.element.parentNode;if(!t||!/pre/i.test(t.nodeName)||t.className.indexOf("line-numbers")===-1){return}var n=1+e.code.split("\n").length;var r;lines=new Array(n);lines=lines.join("<span></span>");r=document.createElement("span");r.className="line-numbers-rows";r.innerHTML=lines;if(t.hasAttribute("data-start")){t.style.counterReset="linenumber "+(parseInt(t.getAttribute("data-start"),10)-1)}e.element.appendChild(r)})
</script>

<pre title="HTML" data-codetype ="HTMLku"><code class="language-markup"> ... kode HTML (yang sudah di`escape`) di sini ... </code></pre>
<pre title="CSS" data-codetype ="CSSku"><code class="language-css"> ... kode CSS di sini ... </code></pre>
<pre title="Javascript" data-codetype ="JavaScriptku"><code class="language-javascript"> ... kode JavaScript di sini ... </code></pre>
<pre title="jQuery" data-codetype ="JQueryku"><code class="language-javascript"> ... kode jQuery di sini ... </code></pre>

<pre title="blade" data-codetype ="Code"><code class="language-markup">

</code></pre>
<?php = &lt;?php