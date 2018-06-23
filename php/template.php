<?php

// Header of page
$HEADER = <<<EOT
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>{{TITLE}}</title>
<meta name="description" content= "{{DESCRIPTION}}">
<meta name="author" content="Maciej Hajduk">
<meta name="viewport" content = "width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
{{FAVICON}}
{{STYLES}}
{{SCRIPTS}}
{{MATH}}
{{INNER-STYLE}}
{{INNER-SCRIPT}}
</head>
<body>
<div id="container">
<div class="row">
<div class="col-6-6 head shadow" id="navbar">
<header id="navigation"><a href="/"><b>Maciej Hajduk</b></a> - Mój Portal Edukacyjny</header>

<ul>
<li><a href="https://okkindel.github.com"><i class="fa fa-globe"></i></a></li>
<li><a href="https://github.com/okkindel"><i class="fa fa-github"></i></a></li>
<li><a href="https://www.facebook.com/maciej.hajduk"><i class="fa fa-facebook"></i></a></li>
<li><a href="mailto:m.hajduk@protonmail.com"><i class="fa fa-envelope"></i></a></li>
</ul>
</div>
</div>
EOT;

// Footer of page
$FOOTER = <<<EOT
<div class="row">
<footer class="col-6-6 head shadow">
<p>Copyright: <b><a href="http://okkindel.github.io">Maciej Hajduk</a></b></p>
</footer>
</div>
</div><!-- container -->
</body>
</html>
EOT;

/**
 * Class for generating specyfic page
 * @package project_one
 * @author Maciej Hajduk
 */
class Page
{
    private $title = "";
    private $description = "";
    private $root = "";
    private $cssfiles = [];
    private $jsfiles = [];
    private $innerStyle = "";
    private $innerScript = "";
    private $math = false;

    /**
     * Add some css
     * @param string $filename
     * @return void
     */
    public function AddCSS($filename)
    {
        $this->cssfiles[] = $filename;
    }

    /**
     * Scripts in header
     * @param string $filename
     * @return void
     */
    public function AddJS($filename)
    {
        $this->jsfiles[] = $filename;
    }

    /**
     * Description of webpage
     * @param string $s
     * @return void
     */
    public function SetDescription($s)
    {
        $this->description = $s;
    }

    /**
     * Styles inside webpage
     * @param string $s
     * @return void
     */
    public function AddInnerStyle($s)
    {
        $this->innerStyle = $s;
    }

    /**
     * JS inside webpage
     * @param string $s
     * @return void
     */
    public function AddInnerScript($s)
    {
        $this->innerScript = $s;
    }

    /**
     * Styles inside webpage
     * @param string $s
     * @return void
     */
    public function AddMath()
    {
        $this->math = true;
    }

    /**
     * Add static css
     * @param string $title - title
     * @param string $root - root of webpage
     * @return void
     */

    public function __construct($title = "", $root = "")
    {
        $this->title = $title;
        $this->root = $root;
        $this->AddCSS("css-release.css");
    }

    /**
     * Returns launch with beggining of page
     * @return string
     */
    public function Begin()
    {
        global $HEADER;
        $s = str_replace(["{{TITLE}}", "{{DESCRIPTION}}"], [$this->title, $this->description], $HEADER);

        // Add styles
        $X = [];
        $C = $this->cssfiles;
        $TMP = '  <link rel="stylesheet" href="{{R}}/css/{{CSS}}">' . "\n";
        for ($i = 0; $i < count($C); $i++) {
            $X[] = (string) str_replace(["{{R}}", "{{CSS}}"], [$this->root, (string) $C[$i]], $TMP);
        }
        $s = str_replace("{{STYLES}}", join("\n", $X), $s);

        // Add favicon
        $X = [];
        $TMP = '  <link rel="icon" type="image/png" href="{{R}}/assets/favicon.png">' . "\n";
        $X[] = (string) str_replace(["{{R}}"], [$this->root], $TMP);
        $s = str_replace("{{FAVICON}}", join("\n", $X), $s);

        // Add scripts
        $X = [];
        $C = $this->jsfiles;
        $T = '  <script src="{{R}}/js/{{JS}}"></script>' . "\n";
        for ($i = 0; $i < count($this->jsfiles); $i++) {
            $X[] = str_replace(["{{R}}", "{{JS}}"], [$this->root, (string) $C[$i]], $T);
        }
        $s = str_replace("{{SCRIPTS}}", join("\n", $X), $s);

        // Uptade inside CSS
        $X = ($this->innerStyle === "") ? "" : "<style>\n" . $this->innerStyle . "\n</style>\n";
        $s = str_replace("{{INNER-STYLE}}", $X, $s);

        // Uptade inside jS
        $X = ($this->innerScript === "") ? "" : "<script>\n" . $this->innerScript . "\n</script>\n";
        $s = str_replace("{{INNER-SCRIPT}}", $X, $s);

        // Add Math
        $X = ($this->math == false) ? "" : "<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML' async></script>";
        $s = str_replace("{{MATH}}", $X, $s);

        // Remove empty lines
        // return preg_replace('/^[ \t]*[\r\n]+/m', '', $s);
        return preg_replace('/^\h*\v+/m', '', $s);
        // \h : dowolny poziomy pusty znak
        // \v : dowolny pionowy pusty znak
        // /m : multiline
    }

    public function PageHeader()
    {
        global $PAGE_HEADER;
        return $PAGE_HEADER;
    }
    /**
     * Returns launch with end of page
     * @return string
     */
    public function End()
    {
        global $FOOTER;
        return $FOOTER;
    }
}

?>