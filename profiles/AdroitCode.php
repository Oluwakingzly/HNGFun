
<?php
    try {
          $query = $conn->query("SELECT * FROM secret_word");
          $result = $query->fetch(PDO::FETCH_ASSOC);
          $secret_word = $result['secret_word'];

          $username = "AdroitCode";
          $fullname = "";
          $image = "";
          $query = $conn->query("SELECT * FROM interns_data where username='$username' limit 1");
          while($result = $query->fetch(PDO::FETCH_ASSOC)){
              $fullname = $result['name'];
              $image = $result['image_filename'];
          }
      } 
  catch (PDOException $event) {
          throw $event;
  }
    //echo $secret_word;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adoit Adio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <script src="main.js"></script>
    <style>
        /*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */

/* Document
   ========================================================================== */

/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in
 *    IE on Windows Phone and in iOS.
 */

 html {
    line-height: 1.15; /* 1 */
        -ms-text-size-adjust: 100%; /* 2 */
    -webkit-text-size-adjust: 100%; /* 2 */
  }
  
  /* Sections
     ========================================================================== */
  
  /**
   * Remove the margin in all browsers (opinionated).
   */
  
  body {
    margin: 0;
  }
  
  /**
   * Add the correct display in IE 9-.
   */
  
  article,
  aside,
  footer,
  header,
  nav,
  section {
    display: block;
  }
  
  /**
   * Correct the font size and margin on `h1` elements within `section` and
   * `article` contexts in Chrome, Firefox, and Safari.
   */
  
  h1 {
    font-size: 2em;
    margin: .67em 0;
  }
  
  /* Grouping content
     ========================================================================== */
  
  /**
   * Add the correct display in IE 9-.
   * 1. Add the correct display in IE.
   */
  
  figcaption,
  figure,
  main {
    /* 1 */
    display: block;
  }
  
  /**
   * Add the correct margin in IE 8.
   */
  
  figure {
    margin: 1em 40px;
  }
  
  /**
   * 1. Add the correct box sizing in Firefox.
   * 2. Show the overflow in Edge and IE.
   */
  
  hr {
    box-sizing: content-box; /* 1 */
    height: 0; /* 1 */
    overflow: visible; /* 2 */
  }
  
  /**
   * 1. Correct the inheritance and scaling of font size in all browsers.
   * 2. Correct the odd `em` font sizing in all browsers.
   */
  
  pre {
    font-family: monospace, monospace; /* 1 */
    font-size: 1em; /* 2 */
  }
  
  /* Text-level semantics
     ========================================================================== */
  
  /**
   * 1. Remove the gray background on active links in IE 10.
   * 2. Remove gaps in links underline in iOS 8+ and Safari 8+.
   */
  
  a {
    background-color: transparent; /* 1 */
    -webkit-text-decoration-skip: objects; /* 2 */
  }
  
  /**
   * 1. Remove the bottom border in Chrome 57- and Firefox 39-.
   * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
   */
  
  abbr[title] {
    border-bottom: none; /* 1 */
    text-decoration: underline; /* 2 */
    text-decoration: underline dotted; /* 2 */
  }
  
  /**
   * Prevent the duplicate application of `bolder` by the next rule in Safari 6.
   */
  
  b,
  strong {
    font-weight: inherit;
  }
  
  /**
   * Add the correct font weight in Chrome, Edge, and Safari.
   */
  
  b,
  strong {
    font-weight: bolder;
  }
  
  /**
   * 1. Correct the inheritance and scaling of font size in all browsers.
   * 2. Correct the odd `em` font sizing in all browsers.
   */
  
  code,
  kbd,
  samp {
    font-family: monospace, monospace; /* 1 */
    font-size: 1em; /* 2 */
  }
  
  /**
   * Add the correct font style in Android 4.3-.
   */
  
  dfn {
    font-style: italic;
  }
  
  /**
   * Add the correct background and color in IE 9-.
   */
  
  mark {
    background-color: #ff0;
    color: #000;
  }
  
  /**
   * Add the correct font size in all browsers.
   */
  
  small {
    font-size: 80%;
  }
  
  /**
   * Prevent `sub` and `sup` elements from affecting the line height in
   * all browsers.
   */
  
  sub,
  sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
  }
  
  sub {
    bottom: -0.25em;
  }
  
  sup {
    top: -0.5em;
  }
  
  /* Embedded content
     ========================================================================== */
  
  /**
   * Add the correct display in IE 9-.
   */
  
  audio,
  video {
    display: inline-block;
  }
  
  /**
   * Add the correct display in iOS 4-7.
   */
  
  audio:not([controls]) {
    display: none;
    height: 0;
  }
  
  /**
   * Remove the border on images inside links in IE 10-.
   */
  
  img {
    border-style: none;
  }
  
  /**
   * Hide the overflow in IE.
   */
  
  svg:not(:root) {
    overflow: hidden;
  }
  
  /* Forms
     ========================================================================== */
  
  /**
   * 1. Change the font styles in all browsers (opinionated).
   * 2. Remove the margin in Firefox and Safari.
   */
  
  button,
  input,
  optgroup,
  select,
  textarea {
    font-family: sans-serif; /* 1 */
    font-size: 100%; /* 1 */
    line-height: 1.15; /* 1 */
    margin: 0; /* 2 */
  }
  
  /**
   * Show the overflow in IE.
   * 1. Show the overflow in Edge.
   */
  
  button,
  input {
    /* 1 */
    overflow: visible;
  }
  
  /**
   * Remove the inheritance of text transform in Edge, Firefox, and IE.
   * 1. Remove the inheritance of text transform in Firefox.
   */
  
  button,
  select {
    /* 1 */
    text-transform: none;
  }
  
  /**
   * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
   *    controls in Android 4.
   * 2. Correct the inability to style clickable types in iOS and Safari.
   */
  
  button,
  html [type="button"],
  /* 1 */
  [type="reset"],
  [type="submit"] {
    -webkit-appearance: button; /* 2 */
  }
  
  /**
   * Remove the inner border and padding in Firefox.
   */
  
  button::-moz-focus-inner,
  [type="button"]::-moz-focus-inner,
  [type="reset"]::-moz-focus-inner,
  [type="submit"]::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }
  
  /**
   * Restore the focus styles unset by the previous rule.
   */
  
  button:-moz-focusring,
  [type="button"]:-moz-focusring,
  [type="reset"]:-moz-focusring,
  [type="submit"]:-moz-focusring {
    outline: 1px dotted ButtonText;
  }
  
  /**
   * Correct the padding in Firefox.
   */
  
  fieldset {
    padding: .35em .75em .625em;
  }
  
  /**
   * 1. Correct the text wrapping in Edge and IE.
   * 2. Correct the color inheritance from `fieldset` elements in IE.
   * 3. Remove the padding so developers are not caught out when they zero out
   *    `fieldset` elements in all browsers.
   */
  
  legend {
    box-sizing: border-box; /* 1 */
    color: inherit; /* 2 */
    display: table; /* 1 */
    max-width: 100%; /* 1 */
    padding: 0; /* 3 */
    white-space: normal; /* 1 */
  }
  
  /**
   * 1. Add the correct display in IE 9-.
   * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
   */
  
  progress {
    display: inline-block; /* 1 */
    vertical-align: baseline; /* 2 */
  }
  
  /**
   * Remove the default vertical scrollbar in IE.
   */
  
  textarea {
    overflow: auto;
  }
  
  /**
   * 1. Add the correct box sizing in IE 10-.
   * 2. Remove the padding in IE 10-.
   */
  
  [type="checkbox"],
  [type="radio"] {
    box-sizing: border-box; /* 1 */
    padding: 0; /* 2 */
  }
  
  /**
   * Correct the cursor style of increment and decrement buttons in Chrome.
   */
  
  [type="number"]::-webkit-inner-spin-button,
  [type="number"]::-webkit-outer-spin-button {
    height: auto;
  }
  
  /**
   * 1. Correct the odd appearance in Chrome and Safari.
   * 2. Correct the outline style in Safari.
   */
  
  [type="search"] {
    -webkit-appearance: textfield; /* 1 */
    outline-offset: -2px; /* 2 */
  }
  
  /**
   * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
   */
  
  [type="search"]::-webkit-search-cancel-button,
  [type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
  }
  
  /**
   * 1. Correct the inability to style clickable types in iOS and Safari.
   * 2. Change font properties to `inherit` in Safari.
   */
  
  ::-webkit-file-upload-button {
    -webkit-appearance: button; /* 1 */
    font: inherit; /* 2 */
  }
  
  /* Interactive
     ========================================================================== */
  
  /*
   * Add the correct display in IE 9-.
   * 1. Add the correct display in Edge, IE, and Firefox.
   */
  
  details,
  /* 1 */
  menu {
    display: block;
  }
  
  /*
   * Add the correct display in all browsers.
   */
  
  summary {
    display: list-item;
  }
  
  /* Scripting
     ========================================================================== */
  
  /**
   * Add the correct display in IE 9-.
   */
  
  canvas {
    display: inline-block;
  }
  
  /**
   * Add the correct display in IE.
   */
  
  template {
    display: none;
  }
  
  /* Hidden
     ========================================================================== */
  
  /**
   * Add the correct display in IE 10-.
   */
  
  [hidden] {
    display: none;
  }
  
  /**
   * Manually forked from SUIT CSS Base: https://github.com/suitcss/base
   * A thin layer on top of normalize.css that provides a starting point more
   * suitable for web applications.
   */
  
  /**
   * 1. Prevent padding and border from affecting element width
   * https://goo.gl/pYtbK7
   * 2. Change the default font family in all browsers (opinionated)
   */
  
  html {
    box-sizing: border-box; /* 1 */
    font-family: sans-serif; /* 2 */
  }
  
  *,
  *::before,
  *::after {
    box-sizing: inherit;
  }
  
  /**
   * Removes the default spacing and border for appropriate elements.
   */
  
  blockquote,
  dl,
  dd,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  figure,
  p,
  pre {
    margin: 0;
  }
  
  button {
    background: transparent;
    padding: 0;
  }
  
  /**
   * Work around a Firefox/IE bug where the transparent `button` background
   * results in a loss of the default `button` focus styles.
   */
  
  button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
  }
  
  fieldset {
    margin: 0;
    padding: 0;
  }
  
  ol,
  ul {
    margin: 0;
  }
  
  /**
   * Suppress the focus outline on elements that cannot be accessed via keyboard.
   * This prevents an unwanted focus outline from appearing around elements that
   * might still respond to pointer events.
   */
  
  [tabindex="-1"]:focus {
    outline: none !important;
  }
  
  /**
   * Tailwind custom reset styles
   */
  
  *,
  *::before,
  *::after {
    border-width: 0;
    border-style: solid;
    border-color: #dae1e7;
  }
  
  /**
   * Temporary reset for a change introduced in Chrome 62 but now reverted.
   *
   * We can remove this when the reversion is in a normal Chrome release.
   */
  
  button,
  [type="button"],
  [type="reset"],
  [type="submit"] {
    border-radius: 0;
  }
  
  textarea {
    resize: vertical;
  }
  
  img {
    max-width: 100%;
  }
  
  button,
  input,
  optgroup,
  select,
  textarea {
    font-family: inherit;
  }
  
  input::placeholder,
  textarea::placeholder {
    color: inherit;
    opacity: .5;
  }
  
  button,
  [role=button] {
    cursor: pointer;
  }
  
  .bg-image {
    background: url(http://res.cloudinary.com/dc9kfp5gt/image/upload/q_100/v1520243603/left_bg_1_umblkn.png);
  }
  
  .font-custo {
    font-family: 'Karla', sans-serif;
  }
  
  .border-t {
    border-top: 2px solid #f7f7f7;
  }
  
  .border-r {
    border-right: 2px solid #f7f7f7;
  }
  
  .border-b {
    border-bottom: 2px solid #f7f7f7;
  }
  
  .font-color {
    color: #333;
  }
  
  .container {
    width: 100%;
  }
  
  @media (min-width: 350px) {
    .container {
      max-width: 350px;
    }
  }
  
  @media (min-width: 768px) {
    .container {
      max-width: 768px;
    }
  }
  
  @media (min-width: 992px) {
    .container {
      max-width: 992px;
    }
  }
  
  @media (min-width: 1200px) {
    .container {
      max-width: 1200px;
    }
  }
  
  .list-reset {
    list-style: none;
    padding: 0;
  }
  
  .appearance-none {
    appearance: none;
  }
  
  .bg-fixed {
    background-attachment: fixed;
  }
  
  .bg-local {
    background-attachment: local;
  }
  
  .bg-scroll {
    background-attachment: scroll;
  }
  
  .bg-transparent {
    background-color: transparent;
  }
  
  .bg-black {
    background-color: #22292f;
  }
  
  .bg-grey-darkest {
    background-color: #3d4852;
  }
  
  .bg-grey-darker {
    background-color: #606f7b;
  }
  
  .bg-grey-dark {
    background-color: #8795a1;
  }
  
  .bg-grey {
    background-color: #b8c2cc;
  }
  
  .bg-grey-light {
    background-color: #dae1e7;
  }
  
  .bg-grey-lighter {
    background-color: #f1f5f8;
  }
  
  .bg-grey-lightest {
    background-color: #f8fafc;
  }
  
  .bg-white {
    background-color: #fff;
  }
  
  .bg-red-darkest {
    background-color: #3b0d0c;
  }
  
  .bg-red-darker {
    background-color: #621b18;
  }
  
  .bg-red-dark {
    background-color: #cc1f1a;
  }
  
  .bg-red {
    background-color: #e3342f;
  }
  
  .bg-red-light {
    background-color: #ef5753;
  }
  
  .bg-red-lighter {
    background-color: #f9acaa;
  }
  
  .bg-red-lightest {
    background-color: #fcebea;
  }
  
  .bg-orange-darkest {
    background-color: #462a16;
  }
  
  .bg-orange-darker {
    background-color: #613b1f;
  }
  
  .bg-orange-dark {
    background-color: #de751f;
  }
  
  .bg-orange {
    background-color: #f6993f;
  }
  
  .bg-orange-light {
    background-color: #faad63;
  }
  
  .bg-orange-lighter {
    background-color: #fcd9b6;
  }
  
  .bg-orange-lightest {
    background-color: #fff5eb;
  }
  
  .bg-yellow-darkest {
    background-color: #453411;
  }
  
  .bg-yellow-darker {
    background-color: #684f1d;
  }
  
  .bg-yellow-dark {
    background-color: #f2d024;
  }
  
  .bg-yellow {
    background-color: #ffed4a;
  }
  
  .bg-yellow-light {
    background-color: #fff382;
  }
  
  .bg-yellow-lighter {
    background-color: #fff9c2;
  }
  
  .bg-yellow-lightest {
    background-color: #fcfbeb;
  }
  
  .bg-green-darkest {
    background-color: #0f2f21;
  }
  
  .bg-green-darker {
    background-color: #1a4731;
  }
  
  .bg-green-dark {
    background-color: #1f9d55;
  }
  
  .bg-green {
    background-color: #38c172;
  }
  
  .bg-green-light {
    background-color: #51d88a;
  }
  
  .bg-green-lighter {
    background-color: #a2f5bf;
  }
  
  .bg-green-lightest {
    background-color: #e3fcec;
  }
  
  .bg-teal-darkest {
    background-color: #0d3331;
  }
  
  .bg-teal-darker {
    background-color: #20504f;
  }
  
  .bg-teal-dark {
    background-color: #38a89d;
  }
  
  .bg-teal {
    background-color: #4dc0b5;
  }
  
  .bg-teal-light {
    background-color: #64d5ca;
  }
  
  .bg-teal-lighter {
    background-color: #a0f0ed;
  }
  
  .bg-teal-lightest {
    background-color: #e8fffe;
  }
  
  .bg-blue-darkest {
    background-color: #12283a;
  }
  
  .bg-blue-darker {
    background-color: #1c3d5a;
  }
  
  .bg-blue-dark {
    background-color: #2779bd;
  }
  
  .bg-blue {
    background-color: #3490dc;
  }
  
  .bg-blue-light {
    background-color: #6cb2eb;
  }
  
  .bg-blue-lighter {
    background-color: #bcdefa;
  }
  
  .bg-blue-lightest {
    background-color: #eff8ff;
  }
  
  .bg-indigo-darkest {
    background-color: #191e38;
  }
  
  .bg-indigo-darker {
    background-color: #2f365f;
  }
  
  .bg-indigo-dark {
    background-color: #5661b3;
  }
  
  .bg-indigo {
    background-color: #6574cd;
  }
  
  .bg-indigo-light {
    background-color: #7886d7;
  }
  
  .bg-indigo-lighter {
    background-color: #b2b7ff;
  }
  
  .bg-indigo-lightest {
    background-color: #e6e8ff;
  }
  
  .bg-purple-darkest {
    background-color: #21183c;
  }
  
  .bg-purple-darker {
    background-color: #382b5f;
  }
  
  .bg-purple-dark {
    background-color: #794acf;
  }
  
  .bg-purple {
    background-color: #9561e2;
  }
  
  .bg-purple-light {
    background-color: #a779e9;
  }
  
  .bg-purple-lighter {
    background-color: #d6bbfc;
  }
  
  .bg-purple-lightest {
    background-color: #f3ebff;
  }
  
  .bg-pink-darkest {
    background-color: #451225;
  }
  
  .bg-pink-darker {
    background-color: #6f213f;
  }
  
  .bg-pink-dark {
    background-color: #eb5286;
  }
  
  .bg-pink {
    background-color: #f66d9b;
  }
  
  .bg-pink-light {
    background-color: #fa7ea8;
  }
  
  .bg-pink-lighter {
    background-color: #ffbbca;
  }
  
  .bg-pink-lightest {
    background-color: #ffebef;
  }
  
  .hover\:bg-transparent:hover {
    background-color: transparent;
  }
  
  .hover\:bg-black:hover {
    background-color: #22292f;
  }
  
  .hover\:bg-grey-darkest:hover {
    background-color: #3d4852;
  }
  
  .hover\:bg-grey-darker:hover {
    background-color: #606f7b;
  }
  
  .hover\:bg-grey-dark:hover {
    background-color: #8795a1;
  }
  
  .hover\:bg-grey:hover {
    background-color: #b8c2cc;
  }
  
  .hover\:bg-grey-light:hover {
    background-color: #dae1e7;
  }
  
  .hover\:bg-grey-lighter:hover {
    background-color: #f1f5f8;
  }
  
  .hover\:bg-grey-lightest:hover {
    background-color: #f8fafc;
  }
  
  .hover\:bg-white:hover {
    background-color: #fff;
  }
  
  .hover\:bg-red-darkest:hover {
    background-color: #3b0d0c;
  }
  
  .hover\:bg-red-darker:hover {
    background-color: #621b18;
  }
  
  .hover\:bg-red-dark:hover {
    background-color: #cc1f1a;
  }
  
  .hover\:bg-red:hover {
    background-color: #e3342f;
  }
  
  .hover\:bg-red-light:hover {
    background-color: #ef5753;
  }
  
  .hover\:bg-red-lighter:hover {
    background-color: #f9acaa;
  }
  
  .hover\:bg-red-lightest:hover {
    background-color: #fcebea;
  }
  
  .hover\:bg-orange-darkest:hover {
    background-color: #462a16;
  }
  
  .hover\:bg-orange-darker:hover {
    background-color: #613b1f;
  }
  
  .hover\:bg-orange-dark:hover {
    background-color: #de751f;
  }
  
  .hover\:bg-orange:hover {
    background-color: #f6993f;
  }
  
  .hover\:bg-orange-light:hover {
    background-color: #faad63;
  }
  
  .hover\:bg-orange-lighter:hover {
    background-color: #fcd9b6;
  }
  
  .hover\:bg-orange-lightest:hover {
    background-color: #fff5eb;
  }
  
  .hover\:bg-yellow-darkest:hover {
    background-color: #453411;
  }
  
  .hover\:bg-yellow-darker:hover {
    background-color: #684f1d;
  }
  
  .hover\:bg-yellow-dark:hover {
    background-color: #f2d024;
  }
  
  .hover\:bg-yellow:hover {
    background-color: #ffed4a;
  }
  
  .hover\:bg-yellow-light:hover {
    background-color: #fff382;
  }
  
  .hover\:bg-yellow-lighter:hover {
    background-color: #fff9c2;
  }
  
  .hover\:bg-yellow-lightest:hover {
    background-color: #fcfbeb;
  }
  
  .hover\:bg-green-darkest:hover {
    background-color: #0f2f21;
  }
  
  .hover\:bg-green-darker:hover {
    background-color: #1a4731;
  }
  
  .hover\:bg-green-dark:hover {
    background-color: #1f9d55;
  }
  
  .hover\:bg-green:hover {
    background-color: #38c172;
  }
  
  .hover\:bg-green-light:hover {
    background-color: #51d88a;
  }
  
  .hover\:bg-green-lighter:hover {
    background-color: #a2f5bf;
  }
  
  .hover\:bg-green-lightest:hover {
    background-color: #e3fcec;
  }
  
  .hover\:bg-teal-darkest:hover {
    background-color: #0d3331;
  }
  
  .hover\:bg-teal-darker:hover {
    background-color: #20504f;
  }
  
  .hover\:bg-teal-dark:hover {
    background-color: #38a89d;
  }
  
  .hover\:bg-teal:hover {
    background-color: #4dc0b5;
  }
  
  .hover\:bg-teal-light:hover {
    background-color: #64d5ca;
  }
  
  .hover\:bg-teal-lighter:hover {
    background-color: #a0f0ed;
  }
  
  .hover\:bg-teal-lightest:hover {
    background-color: #e8fffe;
  }
  
  .hover\:bg-blue-darkest:hover {
    background-color: #12283a;
  }
  
  .hover\:bg-blue-darker:hover {
    background-color: #1c3d5a;
  }
  
  .hover\:bg-blue-dark:hover {
    background-color: #2779bd;
  }
  
  .hover\:bg-blue:hover {
    background-color: #3490dc;
  }
  
  .hover\:bg-blue-light:hover {
    background-color: #6cb2eb;
  }
  
  .hover\:bg-blue-lighter:hover {
    background-color: #bcdefa;
  }
  
  .hover\:bg-blue-lightest:hover {
    background-color: #eff8ff;
  }
  
  .hover\:bg-indigo-darkest:hover {
    background-color: #191e38;
  }
  
  .hover\:bg-indigo-darker:hover {
    background-color: #2f365f;
  }
  
  .hover\:bg-indigo-dark:hover {
    background-color: #5661b3;
  }
  
  .hover\:bg-indigo:hover {
    background-color: #6574cd;
  }
  
  .hover\:bg-indigo-light:hover {
    background-color: #7886d7;
  }
  
  .hover\:bg-indigo-lighter:hover {
    background-color: #b2b7ff;
  }
  
  .hover\:bg-indigo-lightest:hover {
    background-color: #e6e8ff;
  }
  
  .hover\:bg-purple-darkest:hover {
    background-color: #21183c;
  }
  
  .hover\:bg-purple-darker:hover {
    background-color: #382b5f;
  }
  
  .hover\:bg-purple-dark:hover {
    background-color: #794acf;
  }
  
  .hover\:bg-purple:hover {
    background-color: #9561e2;
  }
  
  .hover\:bg-purple-light:hover {
    background-color: #a779e9;
  }
  
  .hover\:bg-purple-lighter:hover {
    background-color: #d6bbfc;
  }
  
  .hover\:bg-purple-lightest:hover {
    background-color: #f3ebff;
  }
  
  .hover\:bg-pink-darkest:hover {
    background-color: #451225;
  }
  
  .hover\:bg-pink-darker:hover {
    background-color: #6f213f;
  }
  
  .hover\:bg-pink-dark:hover {
    background-color: #eb5286;
  }
  
  .hover\:bg-pink:hover {
    background-color: #f66d9b;
  }
  
  .hover\:bg-pink-light:hover {
    background-color: #fa7ea8;
  }
  
  .hover\:bg-pink-lighter:hover {
    background-color: #ffbbca;
  }
  
  .hover\:bg-pink-lightest:hover {
    background-color: #ffebef;
  }
  
  .bg-bottom {
    background-position: bottom;
  }
  
  .bg-center {
    background-position: center;
  }
  
  .bg-left {
    background-position: left;
  }
  
  .bg-left-bottom {
    background-position: left bottom;
  }
  
  .bg-left-top {
    background-position: left top;
  }
  
  .bg-right {
    background-position: right;
  }
  
  .bg-right-bottom {
    background-position: right bottom;
  }
  
  .bg-right-top {
    background-position: right top;
  }
  
  .bg-top {
    background-position: top;
  }
  
  .bg-repeat {
    background-repeat: repeat;
  }
  
  .bg-no-repeat {
    background-repeat: no-repeat;
  }
  
  .bg-repeat-x {
    background-repeat: repeat-x;
  }
  
  .bg-repeat-y {
    background-repeat: repeat-y;
  }
  
  .bg-cover {
    background-size: cover;
  }
  
  .bg-contain {
    background-size: contain;
  }
  
  .border-transparent {
    border-color: transparent;
  }
  
  .border-black {
    border-color: #22292f;
  }
  
  .border-grey-darkest {
    border-color: #3d4852;
  }
  
  .border-grey-darker {
    border-color: #606f7b;
  }
  
  .border-grey-dark {
    border-color: #8795a1;
  }
  
  .border-grey {
    border-color: #b8c2cc;
  }
  
  .border-grey-light {
    border-color: #dae1e7;
  }
  
  .border-grey-lighter {
    border-color: #f1f5f8;
  }
  
  .border-grey-lightest {
    border-color: #f8fafc;
  }
  
  .border-white {
    border-color: #fff;
  }
  
  .border-red-darkest {
    border-color: #3b0d0c;
  }
  
  .border-red-darker {
    border-color: #621b18;
  }
  
  .border-red-dark {
    border-color: #cc1f1a;
  }
  
  .border-red {
    border-color: #e3342f;
  }
  
  .border-red-light {
    border-color: #ef5753;
  }
  
  .border-red-lighter {
    border-color: #f9acaa;
  }
  
  .border-red-lightest {
    border-color: #fcebea;
  }
  
  .border-orange-darkest {
    border-color: #462a16;
  }
  
  .border-orange-darker {
    border-color: #613b1f;
  }
  
  .border-orange-dark {
    border-color: #de751f;
  }
  
  .border-orange {
    border-color: #f6993f;
  }
  
  .border-orange-light {
    border-color: #faad63;
  }
  
  .border-orange-lighter {
    border-color: #fcd9b6;
  }
  
  .border-orange-lightest {
    border-color: #fff5eb;
  }
  
  .border-yellow-darkest {
    border-color: #453411;
  }
  
  .border-yellow-darker {
    border-color: #684f1d;
  }
  
  .border-yellow-dark {
    border-color: #f2d024;
  }
  
  .border-yellow {
    border-color: #ffed4a;
  }
  
  .border-yellow-light {
    border-color: #fff382;
  }
  
  .border-yellow-lighter {
    border-color: #fff9c2;
  }
  
  .border-yellow-lightest {
    border-color: #fcfbeb;
  }
  
  .border-green-darkest {
    border-color: #0f2f21;
  }
  
  .border-green-darker {
    border-color: #1a4731;
  }
  
  .border-green-dark {
    border-color: #1f9d55;
  }
  
  .border-green {
    border-color: #38c172;
  }
  
  .border-green-light {
    border-color: #51d88a;
  }
  
  .border-green-lighter {
    border-color: #a2f5bf;
  }
  
  .border-green-lightest {
    border-color: #e3fcec;
  }
  
  .border-teal-darkest {
    border-color: #0d3331;
  }
  
  .border-teal-darker {
    border-color: #20504f;
  }
  
  .border-teal-dark {
    border-color: #38a89d;
  }
  
  .border-teal {
    border-color: #4dc0b5;
  }
  
  .border-teal-light {
    border-color: #64d5ca;
  }
  
  .border-teal-lighter {
    border-color: #a0f0ed;
  }
  
  .border-teal-lightest {
    border-color: #e8fffe;
  }
  
  .border-blue-darkest {
    border-color: #12283a;
  }
  
  .border-blue-darker {
    border-color: #1c3d5a;
  }
  
  .border-blue-dark {
    border-color: #2779bd;
  }
  
  .border-blue {
    border-color: #3490dc;
  }
  
  .border-blue-light {
    border-color: #6cb2eb;
  }
  
  .border-blue-lighter {
    border-color: #bcdefa;
  }
  
  .border-blue-lightest {
    border-color: #eff8ff;
  }
  
  .border-indigo-darkest {
    border-color: #191e38;
  }
  
  .border-indigo-darker {
    border-color: #2f365f;
  }
  
  .border-indigo-dark {
    border-color: #5661b3;
  }
  
  .border-indigo {
    border-color: #6574cd;
  }
  
  .border-indigo-light {
    border-color: #7886d7;
  }
  
  .border-indigo-lighter {
    border-color: #b2b7ff;
  }
  
  .border-indigo-lightest {
    border-color: #e6e8ff;
  }
  
  .border-purple-darkest {
    border-color: #21183c;
  }
  
  .border-purple-darker {
    border-color: #382b5f;
  }
  
  .border-purple-dark {
    border-color: #794acf;
  }
  
  .border-purple {
    border-color: #9561e2;
  }
  
  .border-purple-light {
    border-color: #a779e9;
  }
  
  .border-purple-lighter {
    border-color: #d6bbfc;
  }
  
  .border-purple-lightest {
    border-color: #f3ebff;
  }
  
  .border-pink-darkest {
    border-color: #451225;
  }
  
  .border-pink-darker {
    border-color: #6f213f;
  }
  
  .border-pink-dark {
    border-color: #eb5286;
  }
  
  .border-pink {
    border-color: #f66d9b;
  }
  
  .border-pink-light {
    border-color: #fa7ea8;
  }
  
  .border-pink-lighter {
    border-color: #ffbbca;
  }
  
  .border-pink-lightest {
    border-color: #ffebef;
  }
  
  .hover\:border-transparent:hover {
    border-color: transparent;
  }
  
  .hover\:border-black:hover {
    border-color: #22292f;
  }
  
  .hover\:border-grey-darkest:hover {
    border-color: #3d4852;
  }
  
  .hover\:border-grey-darker:hover {
    border-color: #606f7b;
  }
  
  .hover\:border-grey-dark:hover {
    border-color: #8795a1;
  }
  
  .hover\:border-grey:hover {
    border-color: #b8c2cc;
  }
  
  .hover\:border-grey-light:hover {
    border-color: #dae1e7;
  }
  
  .hover\:border-grey-lighter:hover {
    border-color: #f1f5f8;
  }
  
  .hover\:border-grey-lightest:hover {
    border-color: #f8fafc;
  }
  
  .hover\:border-white:hover {
    border-color: #fff;
  }
  
  .hover\:border-red-darkest:hover {
    border-color: #3b0d0c;
  }
  
  .hover\:border-red-darker:hover {
    border-color: #621b18;
  }
  
  .hover\:border-red-dark:hover {
    border-color: #cc1f1a;
  }
  
  .hover\:border-red:hover {
    border-color: #e3342f;
  }
  
  .hover\:border-red-light:hover {
    border-color: #ef5753;
  }
  
  .hover\:border-red-lighter:hover {
    border-color: #f9acaa;
  }
  
  .hover\:border-red-lightest:hover {
    border-color: #fcebea;
  }
  
  .hover\:border-orange-darkest:hover {
    border-color: #462a16;
  }
  
  .hover\:border-orange-darker:hover {
    border-color: #613b1f;
  }
  
  .hover\:border-orange-dark:hover {
    border-color: #de751f;
  }
  
  .hover\:border-orange:hover {
    border-color: #f6993f;
  }
  
  .hover\:border-orange-light:hover {
    border-color: #faad63;
  }
  
  .hover\:border-orange-lighter:hover {
    border-color: #fcd9b6;
  }
  
  .hover\:border-orange-lightest:hover {
    border-color: #fff5eb;
  }
  
  .hover\:border-yellow-darkest:hover {
    border-color: #453411;
  }
  
  .hover\:border-yellow-darker:hover {
    border-color: #684f1d;
  }
  
  .hover\:border-yellow-dark:hover {
    border-color: #f2d024;
  }
  
  .hover\:border-yellow:hover {
    border-color: #ffed4a;
  }
  
  .hover\:border-yellow-light:hover {
    border-color: #fff382;
  }
  
  .hover\:border-yellow-lighter:hover {
    border-color: #fff9c2;
  }
  
  .hover\:border-yellow-lightest:hover {
    border-color: #fcfbeb;
  }
  
  .hover\:border-green-darkest:hover {
    border-color: #0f2f21;
  }
  
  .hover\:border-green-darker:hover {
    border-color: #1a4731;
  }
  
  .hover\:border-green-dark:hover {
    border-color: #1f9d55;
  }
  
  .hover\:border-green:hover {
    border-color: #38c172;
  }
  
  .hover\:border-green-light:hover {
    border-color: #51d88a;
  }
  
  .hover\:border-green-lighter:hover {
    border-color: #a2f5bf;
  }
  
  .hover\:border-green-lightest:hover {
    border-color: #e3fcec;
  }
  
  .hover\:border-teal-darkest:hover {
    border-color: #0d3331;
  }
  
  .hover\:border-teal-darker:hover {
    border-color: #20504f;
  }
  
  .hover\:border-teal-dark:hover {
    border-color: #38a89d;
  }
  
  .hover\:border-teal:hover {
    border-color: #4dc0b5;
  }
  
  .hover\:border-teal-light:hover {
    border-color: #64d5ca;
  }
  
  .hover\:border-teal-lighter:hover {
    border-color: #a0f0ed;
  }
  
  .hover\:border-teal-lightest:hover {
    border-color: #e8fffe;
  }
  
  .hover\:border-blue-darkest:hover {
    border-color: #12283a;
  }
  
  .hover\:border-blue-darker:hover {
    border-color: #1c3d5a;
  }
  
  .hover\:border-blue-dark:hover {
    border-color: #2779bd;
  }
  
  .hover\:border-blue:hover {
    border-color: #3490dc;
  }
  
  .hover\:border-blue-light:hover {
    border-color: #6cb2eb;
  }
  
  .hover\:border-blue-lighter:hover {
    border-color: #bcdefa;
  }
  
  .hover\:border-blue-lightest:hover {
    border-color: #eff8ff;
  }
  
  .hover\:border-indigo-darkest:hover {
    border-color: #191e38;
  }
  
  .hover\:border-indigo-darker:hover {
    border-color: #2f365f;
  }
  
  .hover\:border-indigo-dark:hover {
    border-color: #5661b3;
  }
  
  .hover\:border-indigo:hover {
    border-color: #6574cd;
  }
  
  .hover\:border-indigo-light:hover {
    border-color: #7886d7;
  }
  
  .hover\:border-indigo-lighter:hover {
    border-color: #b2b7ff;
  }
  
  .hover\:border-indigo-lightest:hover {
    border-color: #e6e8ff;
  }
  
  .hover\:border-purple-darkest:hover {
    border-color: #21183c;
  }
  
  .hover\:border-purple-darker:hover {
    border-color: #382b5f;
  }
  
  .hover\:border-purple-dark:hover {
    border-color: #794acf;
  }
  
  .hover\:border-purple:hover {
    border-color: #9561e2;
  }
  
  .hover\:border-purple-light:hover {
    border-color: #a779e9;
  }
  
  .hover\:border-purple-lighter:hover {
    border-color: #d6bbfc;
  }
  
  .hover\:border-purple-lightest:hover {
    border-color: #f3ebff;
  }
  
  .hover\:border-pink-darkest:hover {
    border-color: #451225;
  }
  
  .hover\:border-pink-darker:hover {
    border-color: #6f213f;
  }
  
  .hover\:border-pink-dark:hover {
    border-color: #eb5286;
  }
  
  .hover\:border-pink:hover {
    border-color: #f66d9b;
  }
  
  .hover\:border-pink-light:hover {
    border-color: #fa7ea8;
  }
  
  .hover\:border-pink-lighter:hover {
    border-color: #ffbbca;
  }
  
  .hover\:border-pink-lightest:hover {
    border-color: #ffebef;
  }
  
  .rounded-none {
    border-radius: 0;
  }
  
  .rounded-sm {
    border-radius: .125rem;
  }
  
  .rounded {
    border-radius: .25rem;
  }
  
  .rounded-lg {
    border-radius: .5rem;
  }
  
  .rounded-full {
    border-radius: 9999px;
  }
  
  .rounded-t-none {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  
  .rounded-r-none {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  
  .rounded-b-none {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  
  .rounded-l-none {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  
  .rounded-t-sm {
    border-top-left-radius: .125rem;
    border-top-right-radius: .125rem;
  }
  
  .rounded-r-sm {
    border-top-right-radius: .125rem;
    border-bottom-right-radius: .125rem;
  }
  
  .rounded-b-sm {
    border-bottom-right-radius: .125rem;
    border-bottom-left-radius: .125rem;
  }
  
  .rounded-l-sm {
    border-top-left-radius: .125rem;
    border-bottom-left-radius: .125rem;
  }
  
  .rounded-t {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
  }
  
  .rounded-r {
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem;
  }
  
  .rounded-b {
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem;
  }
  
  .rounded-l {
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem;
  }
  
  .rounded-t-lg {
    border-top-left-radius: .5rem;
    border-top-right-radius: .5rem;
  }
  
  .rounded-r-lg {
    border-top-right-radius: .5rem;
    border-bottom-right-radius: .5rem;
  }
  
  .rounded-b-lg {
    border-bottom-right-radius: .5rem;
    border-bottom-left-radius: .5rem;
  }
  
  .rounded-l-lg {
    border-top-left-radius: .5rem;
    border-bottom-left-radius: .5rem;
  }
  
  .rounded-t-full {
    border-top-left-radius: 9999px;
    border-top-right-radius: 9999px;
  }
  
  .rounded-r-full {
    border-top-right-radius: 9999px;
    border-bottom-right-radius: 9999px;
  }
  
  .rounded-b-full {
    border-bottom-right-radius: 9999px;
    border-bottom-left-radius: 9999px;
  }
  
  .rounded-l-full {
    border-top-left-radius: 9999px;
    border-bottom-left-radius: 9999px;
  }
  
  .rounded-tl-none {
    border-top-left-radius: 0;
  }
  
  .rounded-tr-none {
    border-top-right-radius: 0;
  }
  
  .rounded-br-none {
    border-bottom-right-radius: 0;
  }
  
  .rounded-bl-none {
    border-bottom-left-radius: 0;
  }
  
  .rounded-tl-sm {
    border-top-left-radius: .125rem;
  }
  
  .rounded-tr-sm {
    border-top-right-radius: .125rem;
  }
  
  .rounded-br-sm {
    border-bottom-right-radius: .125rem;
  }
  
  .rounded-bl-sm {
    border-bottom-left-radius: .125rem;
  }
  
  .rounded-tl {
    border-top-left-radius: .25rem;
  }
  
  .rounded-tr {
    border-top-right-radius: .25rem;
  }
  
  .rounded-br {
    border-bottom-right-radius: .25rem;
  }
  
  .rounded-bl {
    border-bottom-left-radius: .25rem;
  }
  
  .rounded-tl-lg {
    border-top-left-radius: .5rem;
  }
  
  .rounded-tr-lg {
    border-top-right-radius: .5rem;
  }
  
  .rounded-br-lg {
    border-bottom-right-radius: .5rem;
  }
  
  .rounded-bl-lg {
    border-bottom-left-radius: .5rem;
  }
  
  .rounded-tl-full {
    border-top-left-radius: 9999px;
  }
  
  .rounded-tr-full {
    border-top-right-radius: 9999px;
  }
  
  .rounded-br-full {
    border-bottom-right-radius: 9999px;
  }
  
  .rounded-bl-full {
    border-bottom-left-radius: 9999px;
  }
  
  .border-solid {
    border-style: solid;
  }
  
  .border-dashed {
    border-style: dashed;
  }
  
  .border-dotted {
    border-style: dotted;
  }
  
  .border-none {
    border-style: none;
  }
  
  .border-0 {
    border-width: 0;
  }
  
  .border-2 {
    border-width: 2px;
  }
  
  .border-4 {
    border-width: 4px;
  }
  
  .border-8 {
    border-width: 8px;
  }
  
  .border {
    border-width: 1px;
  }
  
  .border-t-0 {
    border-top-width: 0;
  }
  
  .border-r-0 {
    border-right-width: 0;
  }
  
  .border-b-0 {
    border-bottom-width: 0;
  }
  
  .border-l-0 {
    border-left-width: 0;
  }
  
  .border-t-2 {
    border-top-width: 2px;
  }
  
  .border-r-2 {
    border-right-width: 2px;
  }
  
  .border-b-2 {
    border-bottom-width: 2px;
  }
  
  .border-l-2 {
    border-left-width: 2px;
  }
  
  .border-t-4 {
    border-top-width: 4px;
  }
  
  .border-r-4 {
    border-right-width: 4px;
  }
  
  .border-b-4 {
    border-bottom-width: 4px;
  }
  
  .border-l-4 {
    border-left-width: 4px;
  }
  
  .border-t-8 {
    border-top-width: 8px;
  }
  
  .border-r-8 {
    border-right-width: 8px;
  }
  
  .border-b-8 {
    border-bottom-width: 8px;
  }
  
  .border-l-8 {
    border-left-width: 8px;
  }
  
  .border-t {
    border-top-width: 1px;
  }
  
  .border-r {
    border-right-width: 1px;
  }
  
  .border-b {
    border-bottom-width: 1px;
  }
  
  .border-l {
    border-left-width: 1px;
  }
  
  .cursor-auto {
    cursor: auto;
  }
  
  .cursor-default {
    cursor: default;
  }
  
  .cursor-pointer {
    cursor: pointer;
  }
  
  .cursor-not-allowed {
    cursor: not-allowed;
  }
  
  .block {
    display: block;
  }
  
  .inline-block {
    display: inline-block;
  }
  
  .inline {
    display: inline;
  }
  
  .table {
    display: table;
  }
  
  .table-row {
    display: table-row;
  }
  
  .table-cell {
    display: table-cell;
  }
  
  .hidden {
    display: none;
  }
  
  .flex {
    display: flex;
  }
  
  .inline-flex {
    display: inline-flex;
  }
  
  .flex-row {
    flex-direction: row;
  }
  
  .flex-row-reverse {
    flex-direction: row-reverse;
  }
  
  .flex-col {
    flex-direction: column;
  }
  
  .flex-col-reverse {
    flex-direction: column-reverse;
  }
  
  .flex-wrap {
    flex-wrap: wrap;
  }
  
  .flex-wrap-reverse {
    flex-wrap: wrap-reverse;
  }
  
  .flex-no-wrap {
    flex-wrap: nowrap;
  }
  
  .items-start {
    align-items: flex-start;
  }
  
  .items-end {
    align-items: flex-end;
  }
  
  .items-center {
    align-items: center;
  }
  
  .items-baseline {
    align-items: baseline;
  }
  
  .items-stretch {
    align-items: stretch;
  }
  
  .self-auto {
    align-self: auto;
  }
  
  .self-start {
    align-self: flex-start;
  }
  
  .self-end {
    align-self: flex-end;
  }
  
  .self-center {
    align-self: center;
  }
  
  .self-stretch {
    align-self: stretch;
  }
  
  .justify-start {
    justify-content: flex-start;
  }
  
  .justify-end {
    justify-content: flex-end;
  }
  
  .justify-center {
    justify-content: center;
  }
  
  .justify-between {
    justify-content: space-between;
  }
  
  .justify-around {
    justify-content: space-around;
  }
  
  .content-center {
    align-content: center;
  }
  
  .content-start {
    align-content: flex-start;
  }
  
  .content-end {
    align-content: flex-end;
  }
  
  .content-between {
    align-content: space-between;
  }
  
  .content-around {
    align-content: space-around;
  }
  
  .flex-1 {
    flex: 1;
  }
  
  .flex-auto {
    flex: auto;
  }
  
  .flex-initial {
    flex: initial;
  }
  
  .flex-none {
    flex: none;
  }
  
  .flex-grow {
    flex-grow: 1;
  }
  
  .flex-shrink {
    flex-shrink: 1;
  }
  
  .flex-no-grow {
    flex-grow: 0;
  }
  
  .flex-no-shrink {
    flex-shrink: 0;
  }
  
  .float-right {
    float: right;
  }
  
  .float-left {
    float: left;
  }
  
  .float-none {
    float: none;
  }
  
  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }
  
  .font-sans {
    font-family: system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
  }
  
  .font-serif {
    font-family: Constantia, Lucida Bright, Lucidabright, Lucida Serif, Lucida, DejaVu Serif, Bitstream Vera Serif, Liberation Serif, Georgia, serif;
  }
  
  .font-mono {
    font-family: Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
  }
  
  .font-hairline {
    font-weight: 100;
  }
  
  .font-thin {
    font-weight: 200;
  }
  
  .font-light {
    font-weight: 300;
  }
  
  .font-normal {
    font-weight: 400;
  }
  
  .font-medium {
    font-weight: 500;
  }
  
  .font-semibold {
    font-weight: 600;
  }
  
  .font-bold {
    font-weight: 700;
  }
  
  .font-extrabold {
    font-weight: 800;
  }
  
  .font-black {
    font-weight: 900;
  }
  
  .hover\:font-hairline:hover {
    font-weight: 100;
  }
  
  .hover\:font-thin:hover {
    font-weight: 200;
  }
  
  .hover\:font-light:hover {
    font-weight: 300;
  }
  
  .hover\:font-normal:hover {
    font-weight: 400;
  }
  
  .hover\:font-medium:hover {
    font-weight: 500;
  }
  
  .hover\:font-semibold:hover {
    font-weight: 600;
  }
  
  .hover\:font-bold:hover {
    font-weight: 700;
  }
  
  .hover\:font-extrabold:hover {
    font-weight: 800;
  }
  
  .hover\:font-black:hover {
    font-weight: 900;
  }
  
  .h-1 {
    height: .25rem;
  }
  
  .h-2 {
    height: .5rem;
  }
  
  .h-3 {
    height: .75rem;
  }
  
  .h-4 {
    height: 1rem;
  }
  
  .h-6 {
    height: 1.5rem;
  }
  
  .h-8 {
    height: 2rem;
  }
  
  .h-10 {
    height: 2.5rem;
  }
  
  .h-12 {
    height: 3rem;
  }
  
  .h-16 {
    height: 4rem;
  }
  
  .h-24 {
    height: 6rem;
  }
  
  .h-32 {
    height: 8rem;
  }
  
  .h-48 {
    height: 12rem;
  }
  
  .h-64 {
    height: 16rem;
  }
  
  .h-auto {
    height: auto;
  }
  
  .h-px {
    height: 1px;
  }
  
  .h-full {
    height: 100%;
  }
  
  .h-screen {
    height: 100vh;
  }
  
  .leading-none {
    line-height: 1;
  }
  
  .leading-tight {
    line-height: 1.25;
  }
  
  .leading-normal {
    line-height: 1.5;
  }
  
  .leading-loose {
    line-height: 2;
  }
  
  .m-0 {
    margin: 0;
  }
  
  .m-1 {
    margin: .25rem;
  }
  
  .m-2 {
    margin: .5rem;
  }
  
  .m-3 {
    margin: .75rem;
  }
  
  .m-4 {
    margin: 1rem;
  }
  
  .m-6 {
    margin: 1.5rem;
  }
  
  .m-8 {
    margin: 2rem;
  }
  
  .m-auto {
    margin: auto;
  }
  
  .m-px {
    margin: 1px;
  }
  
  .my-0 {
    margin-top: 0;
    margin-bottom: 0;
  }
  
  .mx-0 {
    margin-left: 0;
    margin-right: 0;
  }
  
  .my-1 {
    margin-top: .25rem;
    margin-bottom: .25rem;
  }
  
  .mx-1 {
    margin-left: .25rem;
    margin-right: .25rem;
  }
  
  .my-2 {
    margin-top: .5rem;
    margin-bottom: .5rem;
  }
  
  .mx-2 {
    margin-left: .5rem;
    margin-right: .5rem;
  }
  
  .my-3 {
    margin-top: .75rem;
    margin-bottom: .75rem;
  }
  
  .mx-3 {
    margin-left: .75rem;
    margin-right: .75rem;
  }
  
  .my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }
  
  .mx-4 {
    margin-left: 1rem;
    margin-right: 1rem;
  }
  
  .my-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }
  
  .mx-6 {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }
  
  .my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem;
  }
  
  .mx-8 {
    margin-left: 2rem;
    margin-right: 2rem;
  }
  
  .my-auto {
    margin-top: auto;
    margin-bottom: auto;
  }
  
  .mx-auto {
    margin-left: auto;
    margin-right: auto;
  }
  
  .my-px {
    margin-top: 1px;
    margin-bottom: 1px;
  }
  
  .mx-px {
    margin-left: 1px;
    margin-right: 1px;
  }
  
  .mt-0 {
    margin-top: 0;
  }
  
  .mr-0 {
    margin-right: 0;
  }
  
  .mb-0 {
    margin-bottom: 0;
  }
  
  .ml-0 {
    margin-left: 0;
  }
  
  .mt-1 {
    margin-top: .25rem;
  }
  
  .mr-1 {
    margin-right: .25rem;
  }
  
  .mb-1 {
    margin-bottom: .25rem;
  }
  
  .ml-1 {
    margin-left: .25rem;
  }
  
  .mt-2 {
    margin-top: .5rem;
  }
  
  .mr-2 {
    margin-right: .5rem;
  }
  
  .mb-2 {
    margin-bottom: .5rem;
  }
  
  .ml-2 {
    margin-left: .5rem;
  }
  
  .mt-3 {
    margin-top: .75rem;
  }
  
  .mr-3 {
    margin-right: .75rem;
  }
  
  .mb-3 {
    margin-bottom: .75rem;
  }
  
  .ml-3 {
    margin-left: .75rem;
  }
  
  .mt-4 {
    margin-top: 1rem;
  }
  
  .mr-4 {
    margin-right: 1rem;
  }
  
  .mb-4 {
    margin-bottom: 1rem;
  }
  
  .ml-4 {
    margin-left: 1rem;
  }
  
  .mt-6 {
    margin-top: 1.5rem;
  }
  
  .mr-6 {
    margin-right: 1.5rem;
  }
  
  .mb-6 {
    margin-bottom: 1.5rem;
  }
  
  .ml-6 {
    margin-left: 1.5rem;
  }
  
  .mt-8 {
    margin-top: 2rem;
  }
  
  .mr-8 {
    margin-right: 2rem;
  }
  
  .mb-8 {
    margin-bottom: 2rem;
  }
  
  .ml-8 {
    margin-left: 2rem;
  }
  
  .mt-auto {
    margin-top: auto;
  }
  
  .mr-auto {
    margin-right: auto;
  }
  
  .mb-auto {
    margin-bottom: auto;
  }
  
  .ml-auto {
    margin-left: auto;
  }
  
  .mt-px {
    margin-top: 1px;
  }
  
  .mr-px {
    margin-right: 1px;
  }
  
  .mb-px {
    margin-bottom: 1px;
  }
  
  .ml-px {
    margin-left: 1px;
  }
  
  .max-h-full {
    max-height: 100%;
  }
  
  .max-h-screen {
    max-height: 100vh;
  }
  
  .max-w-xs {
    max-width: 20rem;
  }
  
  .max-w-sm {
    max-width: 30rem;
  }
  
  .max-w-md {
    max-width: 40rem;
  }
  
  .max-w-lg {
    max-width: 50rem;
  }
  
  .max-w-xl {
    max-width: 60rem;
  }
  
  .max-w-2xl {
    max-width: 70rem;
  }
  
  .max-w-3xl {
    max-width: 80rem;
  }
  
  .max-w-4xl {
    max-width: 90rem;
  }
  
  .max-w-5xl {
    max-width: 100rem;
  }
  
  .max-w-full {
    max-width: 100%;
  }
  
  .min-h-0 {
    min-height: 0;
  }
  
  .min-h-full {
    min-height: 100%;
  }
  
  .min-h-screen {
    min-height: 100vh;
  }
  
  .min-w-0 {
    min-width: 0;
  }
  
  .min-w-full {
    min-width: 100%;
  }
  
  .-m-0 {
    margin: 0;
  }
  
  .-m-1 {
    margin: -0.25rem;
  }
  
  .-m-2 {
    margin: -0.5rem;
  }
  
  .-m-3 {
    margin: -0.75rem;
  }
  
  .-m-4 {
    margin: -1rem;
  }
  
  .-m-6 {
    margin: -1.5rem;
  }
  
  .-m-8 {
    margin: -2rem;
  }
  
  .-m-px {
    margin: -1px;
  }
  
  .-my-0 {
    margin-top: 0;
    margin-bottom: 0;
  }
  
  .-mx-0 {
    margin-left: 0;
    margin-right: 0;
  }
  
  .-my-1 {
    margin-top: -0.25rem;
    margin-bottom: -0.25rem;
  }
  
  .-mx-1 {
    margin-left: -0.25rem;
    margin-right: -0.25rem;
  }
  
  .-my-2 {
    margin-top: -0.5rem;
    margin-bottom: -0.5rem;
  }
  
  .-mx-2 {
    margin-left: -0.5rem;
    margin-right: -0.5rem;
  }
  
  .-my-3 {
    margin-top: -0.75rem;
    margin-bottom: -0.75rem;
  }
  
  .-mx-3 {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }
  
  .-my-4 {
    margin-top: -1rem;
    margin-bottom: -1rem;
  }
  
  .-mx-4 {
    margin-left: -1rem;
    margin-right: -1rem;
  }
  
  .-my-6 {
    margin-top: -1.5rem;
    margin-bottom: -1.5rem;
  }
  
  .-mx-6 {
    margin-left: -1.5rem;
    margin-right: -1.5rem;
  }
  
  .-my-8 {
    margin-top: -2rem;
    margin-bottom: -2rem;
  }
  
  .-mx-8 {
    margin-left: -2rem;
    margin-right: -2rem;
  }
  
  .-my-px {
    margin-top: -1px;
    margin-bottom: -1px;
  }
  
  .-mx-px {
    margin-left: -1px;
    margin-right: -1px;
  }
  
  .-mt-0 {
    margin-top: 0;
  }
  
  .-mr-0 {
    margin-right: 0;
  }
  
  .-mb-0 {
    margin-bottom: 0;
  }
  
  .-ml-0 {
    margin-left: 0;
  }
  
  .-mt-1 {
    margin-top: -0.25rem;
  }
  
  .-mr-1 {
    margin-right: -0.25rem;
  }
  
  .-mb-1 {
    margin-bottom: -0.25rem;
  }
  
  .-ml-1 {
    margin-left: -0.25rem;
  }
  
  .-mt-2 {
    margin-top: -0.5rem;
  }
  
  .-mr-2 {
    margin-right: -0.5rem;
  }
  
  .-mb-2 {
    margin-bottom: -0.5rem;
  }
  
  .-ml-2 {
    margin-left: -0.5rem;
  }
  
  .-mt-3 {
    margin-top: -0.75rem;
  }
  
  .-mr-3 {
    margin-right: -0.75rem;
  }
  
  .-mb-3 {
    margin-bottom: -0.75rem;
  }
  
  .-ml-3 {
    margin-left: -0.75rem;
  }
  
  .-mt-4 {
    margin-top: -1rem;
  }
  
  .-mr-4 {
    margin-right: -1rem;
  }
  
  .-mb-4 {
    margin-bottom: -1rem;
  }
  
  .-ml-4 {
    margin-left: -1rem;
  }
  
  .-mt-6 {
    margin-top: -1.5rem;
  }
  
  .-mr-6 {
    margin-right: -1.5rem;
  }
  
  .-mb-6 {
    margin-bottom: -1.5rem;
  }
  
  .-ml-6 {
    margin-left: -1.5rem;
  }
  
  .-mt-8 {
    margin-top: -2rem;
  }
  
  .-mr-8 {
    margin-right: -2rem;
  }
  
  .-mb-8 {
    margin-bottom: -2rem;
  }
  
  .-ml-8 {
    margin-left: -2rem;
  }
  
  .-mt-px {
    margin-top: -1px;
  }
  
  .-mr-px {
    margin-right: -1px;
  }
  
  .-mb-px {
    margin-bottom: -1px;
  }
  
  .-ml-px {
    margin-left: -1px;
  }
  
  .opacity-0 {
    opacity: 0;
  }
  
  .opacity-25 {
    opacity: .25;
  }
  
  .opacity-50 {
    opacity: .5;
  }
  
  .opacity-75 {
    opacity: .75;
  }
  
  .opacity-100 {
    opacity: 1;
  }
  
  .overflow-auto {
    overflow: auto;
  }
  
  .overflow-hidden {
    overflow: hidden;
  }
  
  .overflow-visible {
    overflow: visible;
  }
  
  .overflow-scroll {
    overflow: scroll;
  }
  
  .overflow-x-scroll {
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  
  .overflow-y-scroll {
    overflow-y: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  
  .scrolling-touch {
    -webkit-overflow-scrolling: touch;
  }
  
  .scrolling-auto {
    -webkit-overflow-scrolling: auto;
  }
  
  .p-0 {
    padding: 0;
  }
  
  .p-1 {
    padding: .25rem;
  }
  
  .p-2 {
    padding: .5rem;
  }
  
  .p-3 {
    padding: .75rem;
  }
  
  .p-4 {
    padding: 1rem;
  }
  
  .p-6 {
    padding: 1.5rem;
  }
  
  .p-8 {
    padding: 2rem;
  }
  
  .p-px {
    padding: 1px;
  }
  
  .py-0 {
    padding-top: 0;
    padding-bottom: 0;
  }
  
  .px-0 {
    padding-left: 0;
    padding-right: 0;
  }
  
  .py-1 {
    padding-top: .25rem;
    padding-bottom: .25rem;
  }
  
  .px-1 {
    padding-left: .25rem;
    padding-right: .25rem;
  }
  
  .py-2 {
    padding-top: .5rem;
    padding-bottom: .5rem;
  }
  
  .px-2 {
    padding-left: .5rem;
    padding-right: .5rem;
  }
  
  .py-3 {
    padding-top: .75rem;
    padding-bottom: .75rem;
  }
  
  .px-3 {
    padding-left: .75rem;
    padding-right: .75rem;
  }
  
  .py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
  
  .px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }
  
  .py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  
  .px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }
  
  .py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }
  
  .px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }
  
  .py-px {
    padding-top: 1px;
    padding-bottom: 1px;
  }
  
  .px-px {
    padding-left: 1px;
    padding-right: 1px;
  }
  
  .pt-0 {
    padding-top: 0;
  }
  
  .pr-0 {
    padding-right: 0;
  }
  
  .pb-0 {
    padding-bottom: 0;
  }
  
  .pl-0 {
    padding-left: 0;
  }
  
  .pt-1 {
    padding-top: .25rem;
  }
  
  .pr-1 {
    padding-right: .25rem;
  }
  
  .pb-1 {
    padding-bottom: .25rem;
  }
  
  .pl-1 {
    padding-left: .25rem;
  }
  
  .pt-2 {
    padding-top: .5rem;
  }
  
  .pr-2 {
    padding-right: .5rem;
  }
  
  .pb-2 {
    padding-bottom: .5rem;
  }
  
  .pl-2 {
    padding-left: .5rem;
  }
  
  .pt-3 {
    padding-top: .75rem;
  }
  
  .pr-3 {
    padding-right: .75rem;
  }
  
  .pb-3 {
    padding-bottom: .75rem;
  }
  
  .pl-3 {
    padding-left: .75rem;
  }
  
  .pt-4 {
    padding-top: 1rem;
  }
  
  .pr-4 {
    padding-right: 1rem;
  }
  
  .pb-4 {
    padding-bottom: 1rem;
  }
  
  .pl-4 {
    padding-left: 1rem;
  }
  
  .pt-6 {
    padding-top: 1.5rem;
  }
  
  .pr-6 {
    padding-right: 1.5rem;
  }
  
  .pb-6 {
    padding-bottom: 1.5rem;
  }
  
  .pl-6 {
    padding-left: 1.5rem;
  }
  
  .pt-8 {
    padding-top: 2rem;
  }
  
  .pr-8 {
    padding-right: 2rem;
  }
  
  .pb-8 {
    padding-bottom: 2rem;
  }
  
  .pl-8 {
    padding-left: 2rem;
  }
  
  .pt-px {
    padding-top: 1px;
  }
  
  .pr-px {
    padding-right: 1px;
  }
  
  .pb-px {
    padding-bottom: 1px;
  }
  
  .pl-px {
    padding-left: 1px;
  }
  
  .pointer-events-none {
    pointer-events: none;
  }
  
  .pointer-events-auto {
    pointer-events: auto;
  }
  
  .static {
    position: static;
  }
  
  .fixed {
    position: fixed;
  }
  
  .absolute {
    position: absolute;
  }
  
  .relative {
    position: relative;
  }
  
  .pin-none {
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
  }
  
  .pin {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }
  
  .pin-y {
    top: 0;
    bottom: 0;
  }
  
  .pin-x {
    right: 0;
    left: 0;
  }
  
  .pin-t {
    top: 0;
  }
  
  .pin-r {
    right: 0;
  }
  
  .pin-b {
    bottom: 0;
  }
  
  .pin-l {
    left: 0;
  }
  
  .resize-none {
    resize: none;
  }
  
  .resize-y {
    resize: vertical;
  }
  
  .resize-x {
    resize: horizontal;
  }
  
  .resize {
    resize: both;
  }
  
  .shadow {
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
  }
  
  .shadow-md {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08);
  }
  
  .shadow-lg {
    box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
  }
  
  .shadow-inner {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, .06);
  }
  
  .shadow-none {
    box-shadow: none;
  }
  
  .fill-current {
    fill: currentColor;
  }
  
  .stroke-current {
    stroke: currentColor;
  }
  
  .text-left {
    text-align: left;
  }
  
  .text-center {
    text-align: center;
  }
  
  .text-right {
    text-align: right;
  }
  
  .text-justify {
    text-align: justify;
  }
  
  .text-transparent {
    color: transparent;
  }
  
  .text-black {
    color: #22292f;
  }
  
  .text-grey-darkest {
    color: #3d4852;
  }
  
  .text-grey-darker {
    color: #606f7b;
  }
  
  .text-grey-dark {
    color: #8795a1;
  }
  
  .text-grey {
    color: #b8c2cc;
  }
  
  .text-grey-light {
    color: #dae1e7;
  }
  
  .text-grey-lighter {
    color: #f1f5f8;
  }
  
  .text-grey-lightest {
    color: #f8fafc;
  }
  
  .text-white {
    color: #fff;
  }
  
  .text-red-darkest {
    color: #3b0d0c;
  }
  
  .text-red-darker {
    color: #621b18;
  }
  
  .text-red-dark {
    color: #cc1f1a;
  }
  
  .text-red {
    color: #e3342f;
  }
  
  .text-red-light {
    color: #ef5753;
  }
  
  .text-red-lighter {
    color: #f9acaa;
  }
  
  .text-red-lightest {
    color: #fcebea;
  }
  
  .text-orange-darkest {
    color: #462a16;
  }
  
  .text-orange-darker {
    color: #613b1f;
  }
  
  .text-orange-dark {
    color: #de751f;
  }
  
  .text-orange {
    color: #f6993f;
  }
  
  .text-orange-light {
    color: #faad63;
  }
  
  .text-orange-lighter {
    color: #fcd9b6;
  }
  
  .text-orange-lightest {
    color: #fff5eb;
  }
  
  .text-yellow-darkest {
    color: #453411;
  }
  
  .text-yellow-darker {
    color: #684f1d;
  }
  
  .text-yellow-dark {
    color: #f2d024;
  }
  
  .text-yellow {
    color: #ffed4a;
  }
  
  .text-yellow-light {
    color: #fff382;
  }
  
  .text-yellow-lighter {
    color: #fff9c2;
  }
  
  .text-yellow-lightest {
    color: #fcfbeb;
  }
  
  .text-green-darkest {
    color: #0f2f21;
  }
  
  .text-green-darker {
    color: #1a4731;
  }
  
  .text-green-dark {
    color: #1f9d55;
  }
  
  .text-green {
    color: #38c172;
  }
  
  .text-green-light {
    color: #51d88a;
  }
  
  .text-green-lighter {
    color: #a2f5bf;
  }
  
  .text-green-lightest {
    color: #e3fcec;
  }
  
  .text-teal-darkest {
    color: #0d3331;
  }
  
  .text-teal-darker {
    color: #20504f;
  }
  
  .text-teal-dark {
    color: #38a89d;
  }
  
  .text-teal {
    color: #4dc0b5;
  }
  
  .text-teal-light {
    color: #64d5ca;
  }
  
  .text-teal-lighter {
    color: #a0f0ed;
  }
  
  .text-teal-lightest {
    color: #e8fffe;
  }
  
  .text-blue-darkest {
    color: #12283a;
  }
  
  .text-blue-darker {
    color: #1c3d5a;
  }
  
  .text-blue-dark {
    color: #2779bd;
  }
  
  .text-blue {
    color: #3490dc;
  }
  
  .text-blue-light {
    color: #6cb2eb;
  }
  
  .text-blue-lighter {
    color: #bcdefa;
  }
  
  .text-blue-lightest {
    color: #eff8ff;
  }
  
  .text-indigo-darkest {
    color: #191e38;
  }
  
  .text-indigo-darker {
    color: #2f365f;
  }
  
  .text-indigo-dark {
    color: #5661b3;
  }
  
  .text-indigo {
    color: #6574cd;
  }
  
  .text-indigo-light {
    color: #7886d7;
  }
  
  .text-indigo-lighter {
    color: #b2b7ff;
  }
  
  .text-indigo-lightest {
    color: #e6e8ff;
  }
  
  .text-purple-darkest {
    color: #21183c;
  }
  
  .text-purple-darker {
    color: #382b5f;
  }
  
  .text-purple-dark {
    color: #794acf;
  }
  
  .text-purple {
    color: #9561e2;
  }
  
  .text-purple-light {
    color: #a779e9;
  }
  
  .text-purple-lighter {
    color: #d6bbfc;
  }
  
  .text-purple-lightest {
    color: #f3ebff;
  }
  
  .text-pink-darkest {
    color: #451225;
  }
  
  .text-pink-darker {
    color: #6f213f;
  }
  
  .text-pink-dark {
    color: #eb5286;
  }
  
  .text-pink {
    color: #f66d9b;
  }
  
  .text-pink-light {
    color: #fa7ea8;
  }
  
  .text-pink-lighter {
    color: #ffbbca;
  }
  
  .text-pink-lightest {
    color: #ffebef;
  }
  
  .hover\:text-transparent:hover {
    color: transparent;
  }
  
  .hover\:text-black:hover {
    color: #22292f;
  }
  
  .hover\:text-grey-darkest:hover {
    color: #3d4852;
  }
  
  .hover\:text-grey-darker:hover {
    color: #606f7b;
  }
  
  .hover\:text-grey-dark:hover {
    color: #8795a1;
  }
  
  .hover\:text-grey:hover {
    color: #b8c2cc;
  }
  
  .hover\:text-grey-light:hover {
    color: #dae1e7;
  }
  
  .hover\:text-grey-lighter:hover {
    color: #f1f5f8;
  }
  
  .hover\:text-grey-lightest:hover {
    color: #f8fafc;
  }
  
  .hover\:text-white:hover {
    color: #fff;
  }
  
  .hover\:text-red-darkest:hover {
    color: #3b0d0c;
  }
  
  .hover\:text-red-darker:hover {
    color: #621b18;
  }
  
  .hover\:text-red-dark:hover {
    color: #cc1f1a;
  }
  
  .hover\:text-red:hover {
    color: #e3342f;
  }
  
  .hover\:text-red-light:hover {
    color: #ef5753;
  }
  
  .hover\:text-red-lighter:hover {
    color: #f9acaa;
  }
  
  .hover\:text-red-lightest:hover {
    color: #fcebea;
  }
  
  .hover\:text-orange-darkest:hover {
    color: #462a16;
  }
  
  .hover\:text-orange-darker:hover {
    color: #613b1f;
  }
  
  .hover\:text-orange-dark:hover {
    color: #de751f;
  }
  
  .hover\:text-orange:hover {
    color: #f6993f;
  }
  
  .hover\:text-orange-light:hover {
    color: #faad63;
  }
  
  .hover\:text-orange-lighter:hover {
    color: #fcd9b6;
  }
  
  .hover\:text-orange-lightest:hover {
    color: #fff5eb;
  }
  
  .hover\:text-yellow-darkest:hover {
    color: #453411;
  }
  
  .hover\:text-yellow-darker:hover {
    color: #684f1d;
  }
  
  .hover\:text-yellow-dark:hover {
    color: #f2d024;
  }
  
  .hover\:text-yellow:hover {
    color: #ffed4a;
  }
  
  .hover\:text-yellow-light:hover {
    color: #fff382;
  }
  
  .hover\:text-yellow-lighter:hover {
    color: #fff9c2;
  }
  
  .hover\:text-yellow-lightest:hover {
    color: #fcfbeb;
  }
  
  .hover\:text-green-darkest:hover {
    color: #0f2f21;
  }
  
  .hover\:text-green-darker:hover {
    color: #1a4731;
  }
  
  .hover\:text-green-dark:hover {
    color: #1f9d55;
  }
  
  .hover\:text-green:hover {
    color: #38c172;
  }
  
  .hover\:text-green-light:hover {
    color: #51d88a;
  }
  
  .hover\:text-green-lighter:hover {
    color: #a2f5bf;
  }
  
  .hover\:text-green-lightest:hover {
    color: #e3fcec;
  }
  
  .hover\:text-teal-darkest:hover {
    color: #0d3331;
  }
  
  .hover\:text-teal-darker:hover {
    color: #20504f;
  }
  
  .hover\:text-teal-dark:hover {
    color: #38a89d;
  }
  
  .hover\:text-teal:hover {
    color: #4dc0b5;
  }
  
  .hover\:text-teal-light:hover {
    color: #64d5ca;
  }
  
  .hover\:text-teal-lighter:hover {
    color: #a0f0ed;
  }
  
  .hover\:text-teal-lightest:hover {
    color: #e8fffe;
  }
  
  .hover\:text-blue-darkest:hover {
    color: #12283a;
  }
  
  .hover\:text-blue-darker:hover {
    color: #1c3d5a;
  }
  
  .hover\:text-blue-dark:hover {
    color: #2779bd;
  }
  
  .hover\:text-blue:hover {
    color: #3490dc;
  }
  
  .hover\:text-blue-light:hover {
    color: #6cb2eb;
  }
  
  .hover\:text-blue-lighter:hover {
    color: #bcdefa;
  }
  
  .hover\:text-blue-lightest:hover {
    color: #eff8ff;
  }
  
  .hover\:text-indigo-darkest:hover {
    color: #191e38;
  }
  
  .hover\:text-indigo-darker:hover {
    color: #2f365f;
  }
  
  .hover\:text-indigo-dark:hover {
    color: #5661b3;
  }
  
  .hover\:text-indigo:hover {
    color: #6574cd;
  }
  
  .hover\:text-indigo-light:hover {
    color: #7886d7;
  }
  
  .hover\:text-indigo-lighter:hover {
    color: #b2b7ff;
  }
  
  .hover\:text-indigo-lightest:hover {
    color: #e6e8ff;
  }
  
  .hover\:text-purple-darkest:hover {
    color: #21183c;
  }
  
  .hover\:text-purple-darker:hover {
    color: #382b5f;
  }
  
  .hover\:text-purple-dark:hover {
    color: #794acf;
  }
  
  .hover\:text-purple:hover {
    color: #9561e2;
  }
  
  .hover\:text-purple-light:hover {
    color: #a779e9;
  }
  
  .hover\:text-purple-lighter:hover {
    color: #d6bbfc;
  }
  
  .hover\:text-purple-lightest:hover {
    color: #f3ebff;
  }
  
  .hover\:text-pink-darkest:hover {
    color: #451225;
  }
  
  .hover\:text-pink-darker:hover {
    color: #6f213f;
  }
  
  .hover\:text-pink-dark:hover {
    color: #eb5286;
  }
  
  .hover\:text-pink:hover {
    color: #f66d9b;
  }
  
  .hover\:text-pink-light:hover {
    color: #fa7ea8;
  }
  
  .hover\:text-pink-lighter:hover {
    color: #ffbbca;
  }
  
  .hover\:text-pink-lightest:hover {
    color: #ffebef;
  }
  
  .text-xs {
    font-size: .75rem;
  }
  
  .text-sm {
    font-size: .875rem;
  }
  
  .text-base {
    font-size: 1rem;
  }
  
  .text-lg {
    font-size: 1.125rem;
  }
  
  .text-xl {
    font-size: 1.25rem;
  }
  
  .text-2xl {
    font-size: 1.5rem;
  }
  
  .text-3xl {
    font-size: 1.875rem;
  }
  
  .text-4xl {
    font-size: 2.25rem;
  }
  
  .text-5xl {
    font-size: 3rem;
  }
  
  .italic {
    font-style: italic;
  }
  
  .roman {
    font-style: normal;
  }
  
  .uppercase {
    text-transform: uppercase;
  }
  
  .lowercase {
    text-transform: lowercase;
  }
  
  .capitalize {
    text-transform: capitalize;
  }
  
  .normal-case {
    text-transform: none;
  }
  
  .underline {
    text-decoration: underline;
  }
  
  .line-through {
    text-decoration: line-through;
  }
  
  .no-underline {
    text-decoration: none;
  }
  
  .antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  
  .subpixel-antialiased {
    -webkit-font-smoothing: auto;
    -moz-osx-font-smoothing: auto;
  }
  
  .hover\:italic:hover {
    font-style: italic;
  }
  
  .hover\:roman:hover {
    font-style: normal;
  }
  
  .hover\:uppercase:hover {
    text-transform: uppercase;
  }
  
  .hover\:lowercase:hover {
    text-transform: lowercase;
  }
  
  .hover\:capitalize:hover {
    text-transform: capitalize;
  }
  
  .hover\:normal-case:hover {
    text-transform: none;
  }
  
  .hover\:underline:hover {
    text-decoration: underline;
  }
  
  .hover\:line-through:hover {
    text-decoration: line-through;
  }
  
  .hover\:no-underline:hover {
    text-decoration: none;
  }
  
  .hover\:antialiased:hover {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  
  .hover\:subpixel-antialiased:hover {
    -webkit-font-smoothing: auto;
    -moz-osx-font-smoothing: auto;
  }
  
  .tracking-tight {
    letter-spacing: -0.05em;
  }
  
  .tracking-normal {
    letter-spacing: 0;
  }
  
  .tracking-wide {
    letter-spacing: .05em;
  }
  
  .select-none {
    user-select: none;
  }
  
  .select-text {
    user-select: text;
  }
  
  .align-baseline {
    vertical-align: baseline;
  }
  
  .align-top {
    vertical-align: top;
  }
  
  .align-middle {
    vertical-align: middle;
  }
  
  .align-bottom {
    vertical-align: bottom;
  }
  
  .align-text-top {
    vertical-align: text-top;
  }
  
  .align-text-bottom {
    vertical-align: text-bottom;
  }
  
  .visible {
    visibility: visible;
  }
  
  .invisible {
    visibility: hidden;
  }
  
  .whitespace-normal {
    white-space: normal;
  }
  
  .whitespace-no-wrap {
    white-space: nowrap;
  }
  
  .whitespace-pre {
    white-space: pre;
  }
  
  .whitespace-pre-line {
    white-space: pre-line;
  }
  
  .whitespace-pre-wrap {
    white-space: pre-wrap;
  }
  
  .break-words {
    word-wrap: break-word;
  }
  
  .break-normal {
    word-wrap: normal;
  }
  
  .truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  
  .w-1 {
    width: .25rem;
  }
  
  .w-2 {
    width: .5rem;
  }
  
  .w-3 {
    width: .75rem;
  }
  
  .w-4 {
    width: 1rem;
  }
  
  .w-6 {
    width: 1.5rem;
  }
  
  .w-8 {
    width: 2rem;
  }
  
  .w-10 {
    width: 2.5rem;
  }
  
  .w-12 {
    width: 3rem;
  }
  
  .w-16 {
    width: 4rem;
  }
  
  .w-24 {
    width: 6rem;
  }
  
  .w-32 {
    width: 8rem;
  }
  
  .w-48 {
    width: 12rem;
  }
  
  .w-64 {
    width: 16rem;
  }
  
  .w-auto {
    width: auto;
  }
  
  .w-px {
    width: 1px;
  }
  
  .w-1\/2 {
    width: 50%;
  }
  
  .w-1\/3 {
    width: 33.33333%;
  }
  
  .w-2\/3 {
    width: 66.66667%;
  }
  
  .w-1\/4 {
    width: 25%;
  }
  
  .w-3\/4 {
    width: 75%;
  }
  
  .w-1\/5 {
    width: 20%;
  }
  
  .w-2\/5 {
    width: 40%;
  }
  
  .w-3\/5 {
    width: 60%;
  }
  
  .w-4\/5 {
    width: 80%;
  }
  
  .w-1\/6 {
    width: 16.66667%;
  }
  
  .w-5\/6 {
    width: 83.33333%;
  }
  
  .w-full {
    width: 100%;
  }
  
  .w-screen {
    width: 100vw;
  }
  
  .z-0 {
    z-index: 0;
  }
  
  .z-10 {
    z-index: 10;
  }
  
  .z-20 {
    z-index: 20;
  }
  
  .z-30 {
    z-index: 30;
  }
  
  .z-40 {
    z-index: 40;
  }
  
  .z-50 {
    z-index: 50;
  }
  
  .z-auto {
    z-index: auto;
  }
  
  @media (min-width: 350px) {
    .sm\:list-reset {
      list-style: none;
      padding: 0;
    }
  
    .sm\:appearance-none {
      appearance: none;
    }
  
    .sm\:bg-fixed {
      background-attachment: fixed;
    }
  
    .sm\:bg-local {
      background-attachment: local;
    }
  
    .sm\:bg-scroll {
      background-attachment: scroll;
    }
  
    .sm\:bg-transparent {
      background-color: transparent;
    }
  
    .sm\:bg-black {
      background-color: #22292f;
    }
  
    .sm\:bg-grey-darkest {
      background-color: #3d4852;
    }
  
    .sm\:bg-grey-darker {
      background-color: #606f7b;
    }
  
    .sm\:bg-grey-dark {
      background-color: #8795a1;
    }
  
    .sm\:bg-grey {
      background-color: #b8c2cc;
    }
  
    .sm\:bg-grey-light {
      background-color: #dae1e7;
    }
  
    .sm\:bg-grey-lighter {
      background-color: #f1f5f8;
    }
  
    .sm\:bg-grey-lightest {
      background-color: #f8fafc;
    }
  
    .sm\:bg-white {
      background-color: #fff;
    }
  
    .sm\:bg-red-darkest {
      background-color: #3b0d0c;
    }
  
    .sm\:bg-red-darker {
      background-color: #621b18;
    }
  
    .sm\:bg-red-dark {
      background-color: #cc1f1a;
    }
  
    .sm\:bg-red {
      background-color: #e3342f;
    }
  
    .sm\:bg-red-light {
      background-color: #ef5753;
    }
  
    .sm\:bg-red-lighter {
      background-color: #f9acaa;
    }
  
    .sm\:bg-red-lightest {
      background-color: #fcebea;
    }
  
    .sm\:bg-orange-darkest {
      background-color: #462a16;
    }
  
    .sm\:bg-orange-darker {
      background-color: #613b1f;
    }
  
    .sm\:bg-orange-dark {
      background-color: #de751f;
    }
  
    .sm\:bg-orange {
      background-color: #f6993f;
    }
  
    .sm\:bg-orange-light {
      background-color: #faad63;
    }
  
    .sm\:bg-orange-lighter {
      background-color: #fcd9b6;
    }
  
    .sm\:bg-orange-lightest {
      background-color: #fff5eb;
    }
  
    .sm\:bg-yellow-darkest {
      background-color: #453411;
    }
  
    .sm\:bg-yellow-darker {
      background-color: #684f1d;
    }
  
    .sm\:bg-yellow-dark {
      background-color: #f2d024;
    }
  
    .sm\:bg-yellow {
      background-color: #ffed4a;
    }
  
    .sm\:bg-yellow-light {
      background-color: #fff382;
    }
  
    .sm\:bg-yellow-lighter {
      background-color: #fff9c2;
    }
  
    .sm\:bg-yellow-lightest {
      background-color: #fcfbeb;
    }
  
    .sm\:bg-green-darkest {
      background-color: #0f2f21;
    }
  
    .sm\:bg-green-darker {
      background-color: #1a4731;
    }
  
    .sm\:bg-green-dark {
      background-color: #1f9d55;
    }
  
    .sm\:bg-green {
      background-color: #38c172;
    }
  
    .sm\:bg-green-light {
      background-color: #51d88a;
    }
  
    .sm\:bg-green-lighter {
      background-color: #a2f5bf;
    }
  
    .sm\:bg-green-lightest {
      background-color: #e3fcec;
    }
  
    .sm\:bg-teal-darkest {
      background-color: #0d3331;
    }
  
    .sm\:bg-teal-darker {
      background-color: #20504f;
    }
  
    .sm\:bg-teal-dark {
      background-color: #38a89d;
    }
  
    .sm\:bg-teal {
      background-color: #4dc0b5;
    }
  
    .sm\:bg-teal-light {
      background-color: #64d5ca;
    }
  
    .sm\:bg-teal-lighter {
      background-color: #a0f0ed;
    }
  
    .sm\:bg-teal-lightest {
      background-color: #e8fffe;
    }
  
    .sm\:bg-blue-darkest {
      background-color: #12283a;
    }
  
    .sm\:bg-blue-darker {
      background-color: #1c3d5a;
    }
  
    .sm\:bg-blue-dark {
      background-color: #2779bd;
    }
  
    .sm\:bg-blue {
      background-color: #3490dc;
    }
  
    .sm\:bg-blue-light {
      background-color: #6cb2eb;
    }
  
    .sm\:bg-blue-lighter {
      background-color: #bcdefa;
    }
  
    .sm\:bg-blue-lightest {
      background-color: #eff8ff;
    }
  
    .sm\:bg-indigo-darkest {
      background-color: #191e38;
    }
  
    .sm\:bg-indigo-darker {
      background-color: #2f365f;
    }
  
    .sm\:bg-indigo-dark {
      background-color: #5661b3;
    }
  
    .sm\:bg-indigo {
      background-color: #6574cd;
    }
  
    .sm\:bg-indigo-light {
      background-color: #7886d7;
    }
  
    .sm\:bg-indigo-lighter {
      background-color: #b2b7ff;
    }
  
    .sm\:bg-indigo-lightest {
      background-color: #e6e8ff;
    }
  
    .sm\:bg-purple-darkest {
      background-color: #21183c;
    }
  
    .sm\:bg-purple-darker {
      background-color: #382b5f;
    }
  
    .sm\:bg-purple-dark {
      background-color: #794acf;
    }
  
    .sm\:bg-purple {
      background-color: #9561e2;
    }
  
    .sm\:bg-purple-light {
      background-color: #a779e9;
    }
  
    .sm\:bg-purple-lighter {
      background-color: #d6bbfc;
    }
  
    .sm\:bg-purple-lightest {
      background-color: #f3ebff;
    }
  
    .sm\:bg-pink-darkest {
      background-color: #451225;
    }
  
    .sm\:bg-pink-darker {
      background-color: #6f213f;
    }
  
    .sm\:bg-pink-dark {
      background-color: #eb5286;
    }
  
    .sm\:bg-pink {
      background-color: #f66d9b;
    }
  
    .sm\:bg-pink-light {
      background-color: #fa7ea8;
    }
  
    .sm\:bg-pink-lighter {
      background-color: #ffbbca;
    }
  
    .sm\:bg-pink-lightest {
      background-color: #ffebef;
    }
  
    .sm\:hover\:bg-transparent:hover {
      background-color: transparent;
    }
  
    .sm\:hover\:bg-black:hover {
      background-color: #22292f;
    }
  
    .sm\:hover\:bg-grey-darkest:hover {
      background-color: #3d4852;
    }
  
    .sm\:hover\:bg-grey-darker:hover {
      background-color: #606f7b;
    }
  
    .sm\:hover\:bg-grey-dark:hover {
      background-color: #8795a1;
    }
  
    .sm\:hover\:bg-grey:hover {
      background-color: #b8c2cc;
    }
  
    .sm\:hover\:bg-grey-light:hover {
      background-color: #dae1e7;
    }
  
    .sm\:hover\:bg-grey-lighter:hover {
      background-color: #f1f5f8;
    }
  
    .sm\:hover\:bg-grey-lightest:hover {
      background-color: #f8fafc;
    }
  
    .sm\:hover\:bg-white:hover {
      background-color: #fff;
    }
  
    .sm\:hover\:bg-red-darkest:hover {
      background-color: #3b0d0c;
    }
  
    .sm\:hover\:bg-red-darker:hover {
      background-color: #621b18;
    }
  
    .sm\:hover\:bg-red-dark:hover {
      background-color: #cc1f1a;
    }
  
    .sm\:hover\:bg-red:hover {
      background-color: #e3342f;
    }
  
    .sm\:hover\:bg-red-light:hover {
      background-color: #ef5753;
    }
  
    .sm\:hover\:bg-red-lighter:hover {
      background-color: #f9acaa;
    }
  
    .sm\:hover\:bg-red-lightest:hover {
      background-color: #fcebea;
    }
  
    .sm\:hover\:bg-orange-darkest:hover {
      background-color: #462a16;
    }
  
    .sm\:hover\:bg-orange-darker:hover {
      background-color: #613b1f;
    }
  
    .sm\:hover\:bg-orange-dark:hover {
      background-color: #de751f;
    }
  
    .sm\:hover\:bg-orange:hover {
      background-color: #f6993f;
    }
  
    .sm\:hover\:bg-orange-light:hover {
      background-color: #faad63;
    }
  
    .sm\:hover\:bg-orange-lighter:hover {
      background-color: #fcd9b6;
    }
  
    .sm\:hover\:bg-orange-lightest:hover {
      background-color: #fff5eb;
    }
  
    .sm\:hover\:bg-yellow-darkest:hover {
      background-color: #453411;
    }
  
    .sm\:hover\:bg-yellow-darker:hover {
      background-color: #684f1d;
    }
  
    .sm\:hover\:bg-yellow-dark:hover {
      background-color: #f2d024;
    }
  
    .sm\:hover\:bg-yellow:hover {
      background-color: #ffed4a;
    }
  
    .sm\:hover\:bg-yellow-light:hover {
      background-color: #fff382;
    }
  
    .sm\:hover\:bg-yellow-lighter:hover {
      background-color: #fff9c2;
    }
  
    .sm\:hover\:bg-yellow-lightest:hover {
      background-color: #fcfbeb;
    }
  
    .sm\:hover\:bg-green-darkest:hover {
      background-color: #0f2f21;
    }
  
    .sm\:hover\:bg-green-darker:hover {
      background-color: #1a4731;
    }
  
    .sm\:hover\:bg-green-dark:hover {
      background-color: #1f9d55;
    }
  
    .sm\:hover\:bg-green:hover {
      background-color: #38c172;
    }
  
    .sm\:hover\:bg-green-light:hover {
      background-color: #51d88a;
    }
  
    .sm\:hover\:bg-green-lighter:hover {
      background-color: #a2f5bf;
    }
  
    .sm\:hover\:bg-green-lightest:hover {
      background-color: #e3fcec;
    }
  
    .sm\:hover\:bg-teal-darkest:hover {
      background-color: #0d3331;
    }
  
    .sm\:hover\:bg-teal-darker:hover {
      background-color: #20504f;
    }
  
    .sm\:hover\:bg-teal-dark:hover {
      background-color: #38a89d;
    }
  
    .sm\:hover\:bg-teal:hover {
      background-color: #4dc0b5;
    }
  
    .sm\:hover\:bg-teal-light:hover {
      background-color: #64d5ca;
    }
  
    .sm\:hover\:bg-teal-lighter:hover {
      background-color: #a0f0ed;
    }
  
    .sm\:hover\:bg-teal-lightest:hover {
      background-color: #e8fffe;
    }
  
    .sm\:hover\:bg-blue-darkest:hover {
      background-color: #12283a;
    }
  
    .sm\:hover\:bg-blue-darker:hover {
      background-color: #1c3d5a;
    }
  
    .sm\:hover\:bg-blue-dark:hover {
      background-color: #2779bd;
    }
  
    .sm\:hover\:bg-blue:hover {
      background-color: #3490dc;
    }
  
    .sm\:hover\:bg-blue-light:hover {
      background-color: #6cb2eb;
    }
  
    .sm\:hover\:bg-blue-lighter:hover {
      background-color: #bcdefa;
    }
  
    .sm\:hover\:bg-blue-lightest:hover {
      background-color: #eff8ff;
    }
  
    .sm\:hover\:bg-indigo-darkest:hover {
      background-color: #191e38;
    }
  
    .sm\:hover\:bg-indigo-darker:hover {
      background-color: #2f365f;
    }
  
    .sm\:hover\:bg-indigo-dark:hover {
      background-color: #5661b3;
    }
  
    .sm\:hover\:bg-indigo:hover {
      background-color: #6574cd;
    }
  
    .sm\:hover\:bg-indigo-light:hover {
      background-color: #7886d7;
    }
  
    .sm\:hover\:bg-indigo-lighter:hover {
      background-color: #b2b7ff;
    }
  
    .sm\:hover\:bg-indigo-lightest:hover {
      background-color: #e6e8ff;
    }
  
    .sm\:hover\:bg-purple-darkest:hover {
      background-color: #21183c;
    }
  
    .sm\:hover\:bg-purple-darker:hover {
      background-color: #382b5f;
    }
  
    .sm\:hover\:bg-purple-dark:hover {
      background-color: #794acf;
    }
  
    .sm\:hover\:bg-purple:hover {
      background-color: #9561e2;
    }
  
    .sm\:hover\:bg-purple-light:hover {
      background-color: #a779e9;
    }
  
    .sm\:hover\:bg-purple-lighter:hover {
      background-color: #d6bbfc;
    }
  
    .sm\:hover\:bg-purple-lightest:hover {
      background-color: #f3ebff;
    }
  
    .sm\:hover\:bg-pink-darkest:hover {
      background-color: #451225;
    }
  
    .sm\:hover\:bg-pink-darker:hover {
      background-color: #6f213f;
    }
  
    .sm\:hover\:bg-pink-dark:hover {
      background-color: #eb5286;
    }
  
    .sm\:hover\:bg-pink:hover {
      background-color: #f66d9b;
    }
  
    .sm\:hover\:bg-pink-light:hover {
      background-color: #fa7ea8;
    }
  
    .sm\:hover\:bg-pink-lighter:hover {
      background-color: #ffbbca;
    }
  
    .sm\:hover\:bg-pink-lightest:hover {
      background-color: #ffebef;
    }
  
    .sm\:bg-bottom {
      background-position: bottom;
    }
  
    .sm\:bg-center {
      background-position: center;
    }
  
    .sm\:bg-left {
      background-position: left;
    }
  
    .sm\:bg-left-bottom {
      background-position: left bottom;
    }
  
    .sm\:bg-left-top {
      background-position: left top;
    }
  
    .sm\:bg-right {
      background-position: right;
    }
  
    .sm\:bg-right-bottom {
      background-position: right bottom;
    }
  
    .sm\:bg-right-top {
      background-position: right top;
    }
  
    .sm\:bg-top {
      background-position: top;
    }
  
    .sm\:bg-repeat {
      background-repeat: repeat;
    }
  
    .sm\:bg-no-repeat {
      background-repeat: no-repeat;
    }
  
    .sm\:bg-repeat-x {
      background-repeat: repeat-x;
    }
  
    .sm\:bg-repeat-y {
      background-repeat: repeat-y;
    }
  
    .sm\:bg-cover {
      background-size: cover;
    }
  
    .sm\:bg-contain {
      background-size: contain;
    }
  
    .sm\:border-transparent {
      border-color: transparent;
    }
  
    .sm\:border-black {
      border-color: #22292f;
    }
  
    .sm\:border-grey-darkest {
      border-color: #3d4852;
    }
  
    .sm\:border-grey-darker {
      border-color: #606f7b;
    }
  
    .sm\:border-grey-dark {
      border-color: #8795a1;
    }
  
    .sm\:border-grey {
      border-color: #b8c2cc;
    }
  
    .sm\:border-grey-light {
      border-color: #dae1e7;
    }
  
    .sm\:border-grey-lighter {
      border-color: #f1f5f8;
    }
  
    .sm\:border-grey-lightest {
      border-color: #f8fafc;
    }
  
    .sm\:border-white {
      border-color: #fff;
    }
  
    .sm\:border-red-darkest {
      border-color: #3b0d0c;
    }
  
    .sm\:border-red-darker {
      border-color: #621b18;
    }
  
    .sm\:border-red-dark {
      border-color: #cc1f1a;
    }
  
    .sm\:border-red {
      border-color: #e3342f;
    }
  
    .sm\:border-red-light {
      border-color: #ef5753;
    }
  
    .sm\:border-red-lighter {
      border-color: #f9acaa;
    }
  
    .sm\:border-red-lightest {
      border-color: #fcebea;
    }
  
    .sm\:border-orange-darkest {
      border-color: #462a16;
    }
  
    .sm\:border-orange-darker {
      border-color: #613b1f;
    }
  
    .sm\:border-orange-dark {
      border-color: #de751f;
    }
  
    .sm\:border-orange {
      border-color: #f6993f;
    }
  
    .sm\:border-orange-light {
      border-color: #faad63;
    }
  
    .sm\:border-orange-lighter {
      border-color: #fcd9b6;
    }
  
    .sm\:border-orange-lightest {
      border-color: #fff5eb;
    }
  
    .sm\:border-yellow-darkest {
      border-color: #453411;
    }
  
    .sm\:border-yellow-darker {
      border-color: #684f1d;
    }
  
    .sm\:border-yellow-dark {
      border-color: #f2d024;
    }
  
    .sm\:border-yellow {
      border-color: #ffed4a;
    }
  
    .sm\:border-yellow-light {
      border-color: #fff382;
    }
  
    .sm\:border-yellow-lighter {
      border-color: #fff9c2;
    }
  
    .sm\:border-yellow-lightest {
      border-color: #fcfbeb;
    }
  
    .sm\:border-green-darkest {
      border-color: #0f2f21;
    }
  
    .sm\:border-green-darker {
      border-color: #1a4731;
    }
  
    .sm\:border-green-dark {
      border-color: #1f9d55;
    }
  
    .sm\:border-green {
      border-color: #38c172;
    }
  
    .sm\:border-green-light {
      border-color: #51d88a;
    }
  
    .sm\:border-green-lighter {
      border-color: #a2f5bf;
    }
  
    .sm\:border-green-lightest {
      border-color: #e3fcec;
    }
  
    .sm\:border-teal-darkest {
      border-color: #0d3331;
    }
  
    .sm\:border-teal-darker {
      border-color: #20504f;
    }
  
    .sm\:border-teal-dark {
      border-color: #38a89d;
    }
  
    .sm\:border-teal {
      border-color: #4dc0b5;
    }
  
    .sm\:border-teal-light {
      border-color: #64d5ca;
    }
  
    .sm\:border-teal-lighter {
      border-color: #a0f0ed;
    }
  
    .sm\:border-teal-lightest {
      border-color: #e8fffe;
    }
  
    .sm\:border-blue-darkest {
      border-color: #12283a;
    }
  
    .sm\:border-blue-darker {
      border-color: #1c3d5a;
    }
  
    .sm\:border-blue-dark {
      border-color: #2779bd;
    }
  
    .sm\:border-blue {
      border-color: #3490dc;
    }
  
    .sm\:border-blue-light {
      border-color: #6cb2eb;
    }
  
    .sm\:border-blue-lighter {
      border-color: #bcdefa;
    }
  
    .sm\:border-blue-lightest {
      border-color: #eff8ff;
    }
  
    .sm\:border-indigo-darkest {
      border-color: #191e38;
    }
  
    .sm\:border-indigo-darker {
      border-color: #2f365f;
    }
  
    .sm\:border-indigo-dark {
      border-color: #5661b3;
    }
  
    .sm\:border-indigo {
      border-color: #6574cd;
    }
  
    .sm\:border-indigo-light {
      border-color: #7886d7;
    }
  
    .sm\:border-indigo-lighter {
      border-color: #b2b7ff;
    }
  
    .sm\:border-indigo-lightest {
      border-color: #e6e8ff;
    }
  
    .sm\:border-purple-darkest {
      border-color: #21183c;
    }
  
    .sm\:border-purple-darker {
      border-color: #382b5f;
    }
  
    .sm\:border-purple-dark {
      border-color: #794acf;
    }
  
    .sm\:border-purple {
      border-color: #9561e2;
    }
  
    .sm\:border-purple-light {
      border-color: #a779e9;
    }
  
    .sm\:border-purple-lighter {
      border-color: #d6bbfc;
    }
  
    .sm\:border-purple-lightest {
      border-color: #f3ebff;
    }
  
    .sm\:border-pink-darkest {
      border-color: #451225;
    }
  
    .sm\:border-pink-darker {
      border-color: #6f213f;
    }
  
    .sm\:border-pink-dark {
      border-color: #eb5286;
    }
  
    .sm\:border-pink {
      border-color: #f66d9b;
    }
  
    .sm\:border-pink-light {
      border-color: #fa7ea8;
    }
  
    .sm\:border-pink-lighter {
      border-color: #ffbbca;
    }
  
    .sm\:border-pink-lightest {
      border-color: #ffebef;
    }
  
    .sm\:hover\:border-transparent:hover {
      border-color: transparent;
    }
  
    .sm\:hover\:border-black:hover {
      border-color: #22292f;
    }
  
    .sm\:hover\:border-grey-darkest:hover {
      border-color: #3d4852;
    }
  
    .sm\:hover\:border-grey-darker:hover {
      border-color: #606f7b;
    }
  
    .sm\:hover\:border-grey-dark:hover {
      border-color: #8795a1;
    }
  
    .sm\:hover\:border-grey:hover {
      border-color: #b8c2cc;
    }
  
    .sm\:hover\:border-grey-light:hover {
      border-color: #dae1e7;
    }
  
    .sm\:hover\:border-grey-lighter:hover {
      border-color: #f1f5f8;
    }
  
    .sm\:hover\:border-grey-lightest:hover {
      border-color: #f8fafc;
    }
  
    .sm\:hover\:border-white:hover {
      border-color: #fff;
    }
  
    .sm\:hover\:border-red-darkest:hover {
      border-color: #3b0d0c;
    }
  
    .sm\:hover\:border-red-darker:hover {
      border-color: #621b18;
    }
  
    .sm\:hover\:border-red-dark:hover {
      border-color: #cc1f1a;
    }
  
    .sm\:hover\:border-red:hover {
      border-color: #e3342f;
    }
  
    .sm\:hover\:border-red-light:hover {
      border-color: #ef5753;
    }
  
    .sm\:hover\:border-red-lighter:hover {
      border-color: #f9acaa;
    }
  
    .sm\:hover\:border-red-lightest:hover {
      border-color: #fcebea;
    }
  
    .sm\:hover\:border-orange-darkest:hover {
      border-color: #462a16;
    }
  
    .sm\:hover\:border-orange-darker:hover {
      border-color: #613b1f;
    }
  
    .sm\:hover\:border-orange-dark:hover {
      border-color: #de751f;
    }
  
    .sm\:hover\:border-orange:hover {
      border-color: #f6993f;
    }
  
    .sm\:hover\:border-orange-light:hover {
      border-color: #faad63;
    }
  
    .sm\:hover\:border-orange-lighter:hover {
      border-color: #fcd9b6;
    }
  
    .sm\:hover\:border-orange-lightest:hover {
      border-color: #fff5eb;
    }
  
    .sm\:hover\:border-yellow-darkest:hover {
      border-color: #453411;
    }
  
    .sm\:hover\:border-yellow-darker:hover {
      border-color: #684f1d;
    }
  
    .sm\:hover\:border-yellow-dark:hover {
      border-color: #f2d024;
    }
  
    .sm\:hover\:border-yellow:hover {
      border-color: #ffed4a;
    }
  
    .sm\:hover\:border-yellow-light:hover {
      border-color: #fff382;
    }
  
    .sm\:hover\:border-yellow-lighter:hover {
      border-color: #fff9c2;
    }
  
    .sm\:hover\:border-yellow-lightest:hover {
      border-color: #fcfbeb;
    }
  
    .sm\:hover\:border-green-darkest:hover {
      border-color: #0f2f21;
    }
  
    .sm\:hover\:border-green-darker:hover {
      border-color: #1a4731;
    }
  
    .sm\:hover\:border-green-dark:hover {
      border-color: #1f9d55;
    }
  
    .sm\:hover\:border-green:hover {
      border-color: #38c172;
    }
  
    .sm\:hover\:border-green-light:hover {
      border-color: #51d88a;
    }
  
    .sm\:hover\:border-green-lighter:hover {
      border-color: #a2f5bf;
    }
  
    .sm\:hover\:border-green-lightest:hover {
      border-color: #e3fcec;
    }
  
    .sm\:hover\:border-teal-darkest:hover {
      border-color: #0d3331;
    }
  
    .sm\:hover\:border-teal-darker:hover {
      border-color: #20504f;
    }
  
    .sm\:hover\:border-teal-dark:hover {
      border-color: #38a89d;
    }
  
    .sm\:hover\:border-teal:hover {
      border-color: #4dc0b5;
    }
  
    .sm\:hover\:border-teal-light:hover {
      border-color: #64d5ca;
    }
  
    .sm\:hover\:border-teal-lighter:hover {
      border-color: #a0f0ed;
    }
  
    .sm\:hover\:border-teal-lightest:hover {
      border-color: #e8fffe;
    }
  
    .sm\:hover\:border-blue-darkest:hover {
      border-color: #12283a;
    }
  
    .sm\:hover\:border-blue-darker:hover {
      border-color: #1c3d5a;
    }
  
    .sm\:hover\:border-blue-dark:hover {
      border-color: #2779bd;
    }
  
    .sm\:hover\:border-blue:hover {
      border-color: #3490dc;
    }
  
    .sm\:hover\:border-blue-light:hover {
      border-color: #6cb2eb;
    }
  
    .sm\:hover\:border-blue-lighter:hover {
      border-color: #bcdefa;
    }
  
    .sm\:hover\:border-blue-lightest:hover {
      border-color: #eff8ff;
    }
  
    .sm\:hover\:border-indigo-darkest:hover {
      border-color: #191e38;
    }
  
    .sm\:hover\:border-indigo-darker:hover {
      border-color: #2f365f;
    }
  
    .sm\:hover\:border-indigo-dark:hover {
      border-color: #5661b3;
    }
  
    .sm\:hover\:border-indigo:hover {
      border-color: #6574cd;
    }
  
    .sm\:hover\:border-indigo-light:hover {
      border-color: #7886d7;
    }
  
    .sm\:hover\:border-indigo-lighter:hover {
      border-color: #b2b7ff;
    }
  
    .sm\:hover\:border-indigo-lightest:hover {
      border-color: #e6e8ff;
    }
  
    .sm\:hover\:border-purple-darkest:hover {
      border-color: #21183c;
    }
  
    .sm\:hover\:border-purple-darker:hover {
      border-color: #382b5f;
    }
  
    .sm\:hover\:border-purple-dark:hover {
      border-color: #794acf;
    }
  
    .sm\:hover\:border-purple:hover {
      border-color: #9561e2;
    }
  
    .sm\:hover\:border-purple-light:hover {
      border-color: #a779e9;
    }
  
    .sm\:hover\:border-purple-lighter:hover {
      border-color: #d6bbfc;
    }
  
    .sm\:hover\:border-purple-lightest:hover {
      border-color: #f3ebff;
    }
  
    .sm\:hover\:border-pink-darkest:hover {
      border-color: #451225;
    }
  
    .sm\:hover\:border-pink-darker:hover {
      border-color: #6f213f;
    }
  
    .sm\:hover\:border-pink-dark:hover {
      border-color: #eb5286;
    }
  
    .sm\:hover\:border-pink:hover {
      border-color: #f66d9b;
    }
  
    .sm\:hover\:border-pink-light:hover {
      border-color: #fa7ea8;
    }
  
    .sm\:hover\:border-pink-lighter:hover {
      border-color: #ffbbca;
    }
  
    .sm\:hover\:border-pink-lightest:hover {
      border-color: #ffebef;
    }
  
    .sm\:rounded-none {
      border-radius: 0;
    }
  
    .sm\:rounded-sm {
      border-radius: .125rem;
    }
  
    .sm\:rounded {
      border-radius: .25rem;
    }
  
    .sm\:rounded-lg {
      border-radius: .5rem;
    }
  
    .sm\:rounded-full {
      border-radius: 9999px;
    }
  
    .sm\:rounded-t-none {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  
    .sm\:rounded-r-none {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }
  
    .sm\:rounded-b-none {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
  
    .sm\:rounded-l-none {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }
  
    .sm\:rounded-t-sm {
      border-top-left-radius: .125rem;
      border-top-right-radius: .125rem;
    }
  
    .sm\:rounded-r-sm {
      border-top-right-radius: .125rem;
      border-bottom-right-radius: .125rem;
    }
  
    .sm\:rounded-b-sm {
      border-bottom-right-radius: .125rem;
      border-bottom-left-radius: .125rem;
    }
  
    .sm\:rounded-l-sm {
      border-top-left-radius: .125rem;
      border-bottom-left-radius: .125rem;
    }
  
    .sm\:rounded-t {
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem;
    }
  
    .sm\:rounded-r {
      border-top-right-radius: .25rem;
      border-bottom-right-radius: .25rem;
    }
  
    .sm\:rounded-b {
      border-bottom-right-radius: .25rem;
      border-bottom-left-radius: .25rem;
    }
  
    .sm\:rounded-l {
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem;
    }
  
    .sm\:rounded-t-lg {
      border-top-left-radius: .5rem;
      border-top-right-radius: .5rem;
    }
  
    .sm\:rounded-r-lg {
      border-top-right-radius: .5rem;
      border-bottom-right-radius: .5rem;
    }
  
    .sm\:rounded-b-lg {
      border-bottom-right-radius: .5rem;
      border-bottom-left-radius: .5rem;
    }
  
    .sm\:rounded-l-lg {
      border-top-left-radius: .5rem;
      border-bottom-left-radius: .5rem;
    }
  
    .sm\:rounded-t-full {
      border-top-left-radius: 9999px;
      border-top-right-radius: 9999px;
    }
  
    .sm\:rounded-r-full {
      border-top-right-radius: 9999px;
      border-bottom-right-radius: 9999px;
    }
  
    .sm\:rounded-b-full {
      border-bottom-right-radius: 9999px;
      border-bottom-left-radius: 9999px;
    }
  
    .sm\:rounded-l-full {
      border-top-left-radius: 9999px;
      border-bottom-left-radius: 9999px;
    }
  
    .sm\:rounded-tl-none {
      border-top-left-radius: 0;
    }
  
    .sm\:rounded-tr-none {
      border-top-right-radius: 0;
    }
  
    .sm\:rounded-br-none {
      border-bottom-right-radius: 0;
    }
  
    .sm\:rounded-bl-none {
      border-bottom-left-radius: 0;
    }
  
    .sm\:rounded-tl-sm {
      border-top-left-radius: .125rem;
    }
  
    .sm\:rounded-tr-sm {
      border-top-right-radius: .125rem;
    }
  
    .sm\:rounded-br-sm {
      border-bottom-right-radius: .125rem;
    }
  
    .sm\:rounded-bl-sm {
      border-bottom-left-radius: .125rem;
    }
  
    .sm\:rounded-tl {
      border-top-left-radius: .25rem;
    }
  
    .sm\:rounded-tr {
      border-top-right-radius: .25rem;
    }
  
    .sm\:rounded-br {
      border-bottom-right-radius: .25rem;
    }
  
    .sm\:rounded-bl {
      border-bottom-left-radius: .25rem;
    }
  
    .sm\:rounded-tl-lg {
      border-top-left-radius: .5rem;
    }
  
    .sm\:rounded-tr-lg {
      border-top-right-radius: .5rem;
    }
  
    .sm\:rounded-br-lg {
      border-bottom-right-radius: .5rem;
    }
  
    .sm\:rounded-bl-lg {
      border-bottom-left-radius: .5rem;
    }
  
    .sm\:rounded-tl-full {
      border-top-left-radius: 9999px;
    }
  
    .sm\:rounded-tr-full {
      border-top-right-radius: 9999px;
    }
  
    .sm\:rounded-br-full {
      border-bottom-right-radius: 9999px;
    }
  
    .sm\:rounded-bl-full {
      border-bottom-left-radius: 9999px;
    }
  
    .sm\:border-solid {
      border-style: solid;
    }
  
    .sm\:border-dashed {
      border-style: dashed;
    }
  
    .sm\:border-dotted {
      border-style: dotted;
    }
  
    .sm\:border-none {
      border-style: none;
    }
  
    .sm\:border-0 {
      border-width: 0;
    }
  
    .sm\:border-2 {
      border-width: 2px;
    }
  
    .sm\:border-4 {
      border-width: 4px;
    }
  
    .sm\:border-8 {
      border-width: 8px;
    }
  
    .sm\:border {
      border-width: 1px;
    }
  
    .sm\:border-t-0 {
      border-top-width: 0;
    }
  
    .sm\:border-r-0 {
      border-right-width: 0;
    }
  
    .sm\:border-b-0 {
      border-bottom-width: 0;
    }
  
    .sm\:border-l-0 {
      border-left-width: 0;
    }
  
    .sm\:border-t-2 {
      border-top-width: 2px;
    }
  
    .sm\:border-r-2 {
      border-right-width: 2px;
    }
  
    .sm\:border-b-2 {
      border-bottom-width: 2px;
    }
  
    .sm\:border-l-2 {
      border-left-width: 2px;
    }
  
    .sm\:border-t-4 {
      border-top-width: 4px;
    }
  
    .sm\:border-r-4 {
      border-right-width: 4px;
    }
  
    .sm\:border-b-4 {
      border-bottom-width: 4px;
    }
  
    .sm\:border-l-4 {
      border-left-width: 4px;
    }
  
    .sm\:border-t-8 {
      border-top-width: 8px;
    }
  
    .sm\:border-r-8 {
      border-right-width: 8px;
    }
  
    .sm\:border-b-8 {
      border-bottom-width: 8px;
    }
  
    .sm\:border-l-8 {
      border-left-width: 8px;
    }
  
    .sm\:border-t {
      border-top-width: 1px;
    }
  
    .sm\:border-r {
      border-right-width: 1px;
    }
  
    .sm\:border-b {
      border-bottom-width: 1px;
    }
  
    .sm\:border-l {
      border-left-width: 1px;
    }
  
    .sm\:cursor-auto {
      cursor: auto;
    }
  
    .sm\:cursor-default {
      cursor: default;
    }
  
    .sm\:cursor-pointer {
      cursor: pointer;
    }
  
    .sm\:cursor-not-allowed {
      cursor: not-allowed;
    }
  
    .sm\:block {
      display: block;
    }
  
    .sm\:inline-block {
      display: inline-block;
    }
  
    .sm\:inline {
      display: inline;
    }
  
    .sm\:table {
      display: table;
    }
  
    .sm\:table-row {
      display: table-row;
    }
  
    .sm\:table-cell {
      display: table-cell;
    }
  
    .sm\:hidden {
      display: none;
    }
  
    .sm\:flex {
      display: flex;
    }
  
    .sm\:inline-flex {
      display: inline-flex;
    }
  
    .sm\:flex-row {
      flex-direction: row;
    }
  
    .sm\:flex-row-reverse {
      flex-direction: row-reverse;
    }
  
    .sm\:flex-col {
      flex-direction: column;
    }
  
    .sm\:flex-col-reverse {
      flex-direction: column-reverse;
    }
  
    .sm\:flex-wrap {
      flex-wrap: wrap;
    }
  
    .sm\:flex-wrap-reverse {
      flex-wrap: wrap-reverse;
    }
  
    .sm\:flex-no-wrap {
      flex-wrap: nowrap;
    }
  
    .sm\:items-start {
      align-items: flex-start;
    }
  
    .sm\:items-end {
      align-items: flex-end;
    }
  
    .sm\:items-center {
      align-items: center;
    }
  
    .sm\:items-baseline {
      align-items: baseline;
    }
  
    .sm\:items-stretch {
      align-items: stretch;
    }
  
    .sm\:self-auto {
      align-self: auto;
    }
  
    .sm\:self-start {
      align-self: flex-start;
    }
  
    .sm\:self-end {
      align-self: flex-end;
    }
  
    .sm\:self-center {
      align-self: center;
    }
  
    .sm\:self-stretch {
      align-self: stretch;
    }
  
    .sm\:justify-start {
      justify-content: flex-start;
    }
  
    .sm\:justify-end {
      justify-content: flex-end;
    }
  
    .sm\:justify-center {
      justify-content: center;
    }
  
    .sm\:justify-between {
      justify-content: space-between;
    }
  
    .sm\:justify-around {
      justify-content: space-around;
    }
  
    .sm\:content-center {
      align-content: center;
    }
  
    .sm\:content-start {
      align-content: flex-start;
    }
  
    .sm\:content-end {
      align-content: flex-end;
    }
  
    .sm\:content-between {
      align-content: space-between;
    }
  
    .sm\:content-around {
      align-content: space-around;
    }
  
    .sm\:flex-1 {
      flex: 1;
    }
  
    .sm\:flex-auto {
      flex: auto;
    }
  
    .sm\:flex-initial {
      flex: initial;
    }
  
    .sm\:flex-none {
      flex: none;
    }
  
    .sm\:flex-grow {
      flex-grow: 1;
    }
  
    .sm\:flex-shrink {
      flex-shrink: 1;
    }
  
    .sm\:flex-no-grow {
      flex-grow: 0;
    }
  
    .sm\:flex-no-shrink {
      flex-shrink: 0;
    }
  
    .sm\:float-right {
      float: right;
    }
  
    .sm\:float-left {
      float: left;
    }
  
    .sm\:float-none {
      float: none;
    }
  
    .sm\:clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
  
    .sm\:font-sans {
      font-family: system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
    }
  
    .sm\:font-serif {
      font-family: Constantia, Lucida Bright, Lucidabright, Lucida Serif, Lucida, DejaVu Serif, Bitstream Vera Serif, Liberation Serif, Georgia, serif;
    }
  
    .sm\:font-mono {
      font-family: Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
    }
  
    .sm\:font-hairline {
      font-weight: 100;
    }
  
    .sm\:font-thin {
      font-weight: 200;
    }
  
    .sm\:font-light {
      font-weight: 300;
    }
  
    .sm\:font-normal {
      font-weight: 400;
    }
  
    .sm\:font-medium {
      font-weight: 500;
    }
  
    .sm\:font-semibold {
      font-weight: 600;
    }
  
    .sm\:font-bold {
      font-weight: 700;
    }
  
    .sm\:font-extrabold {
      font-weight: 800;
    }
  
    .sm\:font-black {
      font-weight: 900;
    }
  
    .sm\:hover\:font-hairline:hover {
      font-weight: 100;
    }
  
    .sm\:hover\:font-thin:hover {
      font-weight: 200;
    }
  
    .sm\:hover\:font-light:hover {
      font-weight: 300;
    }
  
    .sm\:hover\:font-normal:hover {
      font-weight: 400;
    }
  
    .sm\:hover\:font-medium:hover {
      font-weight: 500;
    }
  
    .sm\:hover\:font-semibold:hover {
      font-weight: 600;
    }
  
    .sm\:hover\:font-bold:hover {
      font-weight: 700;
    }
  
    .sm\:hover\:font-extrabold:hover {
      font-weight: 800;
    }
  
    .sm\:hover\:font-black:hover {
      font-weight: 900;
    }
  
    .sm\:h-1 {
      height: .25rem;
    }
  
    .sm\:h-2 {
      height: .5rem;
    }
  
    .sm\:h-3 {
      height: .75rem;
    }
  
    .sm\:h-4 {
      height: 1rem;
    }
  
    .sm\:h-6 {
      height: 1.5rem;
    }
  
    .sm\:h-8 {
      height: 2rem;
    }
  
    .sm\:h-10 {
      height: 2.5rem;
    }
  
    .sm\:h-12 {
      height: 3rem;
    }
  
    .sm\:h-16 {
      height: 4rem;
    }
  
    .sm\:h-24 {
      height: 6rem;
    }
  
    .sm\:h-32 {
      height: 8rem;
    }
  
    .sm\:h-48 {
      height: 12rem;
    }
  
    .sm\:h-64 {
      height: 16rem;
    }
  
    .sm\:h-auto {
      height: auto;
    }
  
    .sm\:h-px {
      height: 1px;
    }
  
    .sm\:h-full {
      height: 100%;
    }
  
    .sm\:h-screen {
      height: 100vh;
    }
  
    .sm\:leading-none {
      line-height: 1;
    }
  
    .sm\:leading-tight {
      line-height: 1.25;
    }
  
    .sm\:leading-normal {
      line-height: 1.5;
    }
  
    .sm\:leading-loose {
      line-height: 2;
    }
  
    .sm\:m-0 {
      margin: 0;
    }
  
    .sm\:m-1 {
      margin: .25rem;
    }
  
    .sm\:m-2 {
      margin: .5rem;
    }
  
    .sm\:m-3 {
      margin: .75rem;
    }
  
    .sm\:m-4 {
      margin: 1rem;
    }
  
    .sm\:m-6 {
      margin: 1.5rem;
    }
  
    .sm\:m-8 {
      margin: 2rem;
    }
  
    .sm\:m-auto {
      margin: auto;
    }
  
    .sm\:m-px {
      margin: 1px;
    }
  
    .sm\:my-0 {
      margin-top: 0;
      margin-bottom: 0;
    }
  
    .sm\:mx-0 {
      margin-left: 0;
      margin-right: 0;
    }
  
    .sm\:my-1 {
      margin-top: .25rem;
      margin-bottom: .25rem;
    }
  
    .sm\:mx-1 {
      margin-left: .25rem;
      margin-right: .25rem;
    }
  
    .sm\:my-2 {
      margin-top: .5rem;
      margin-bottom: .5rem;
    }
  
    .sm\:mx-2 {
      margin-left: .5rem;
      margin-right: .5rem;
    }
  
    .sm\:my-3 {
      margin-top: .75rem;
      margin-bottom: .75rem;
    }
  
    .sm\:mx-3 {
      margin-left: .75rem;
      margin-right: .75rem;
    }
  
    .sm\:my-4 {
      margin-top: 1rem;
      margin-bottom: 1rem;
    }
  
    .sm\:mx-4 {
      margin-left: 1rem;
      margin-right: 1rem;
    }
  
    .sm\:my-6 {
      margin-top: 1.5rem;
      margin-bottom: 1.5rem;
    }
  
    .sm\:mx-6 {
      margin-left: 1.5rem;
      margin-right: 1.5rem;
    }
  
    .sm\:my-8 {
      margin-top: 2rem;
      margin-bottom: 2rem;
    }
  
    .sm\:mx-8 {
      margin-left: 2rem;
      margin-right: 2rem;
    }
  
    .sm\:my-auto {
      margin-top: auto;
      margin-bottom: auto;
    }
  
    .sm\:mx-auto {
      margin-left: auto;
      margin-right: auto;
    }
  
    .sm\:my-px {
      margin-top: 1px;
      margin-bottom: 1px;
    }
  
    .sm\:mx-px {
      margin-left: 1px;
      margin-right: 1px;
    }
  
    .sm\:mt-0 {
      margin-top: 0;
    }
  
    .sm\:mr-0 {
      margin-right: 0;
    }
  
    .sm\:mb-0 {
      margin-bottom: 0;
    }
  
    .sm\:ml-0 {
      margin-left: 0;
    }
  
    .sm\:mt-1 {
      margin-top: .25rem;
    }
  
    .sm\:mr-1 {
      margin-right: .25rem;
    }
  
    .sm\:mb-1 {
      margin-bottom: .25rem;
    }
  
    .sm\:ml-1 {
      margin-left: .25rem;
    }
  
    .sm\:mt-2 {
      margin-top: .5rem;
    }
  
    .sm\:mr-2 {
      margin-right: .5rem;
    }
  
    .sm\:mb-2 {
      margin-bottom: .5rem;
    }
  
    .sm\:ml-2 {
      margin-left: .5rem;
    }
  
    .sm\:mt-3 {
      margin-top: .75rem;
    }
  
    .sm\:mr-3 {
      margin-right: .75rem;
    }
  
    .sm\:mb-3 {
      margin-bottom: .75rem;
    }
  
    .sm\:ml-3 {
      margin-left: .75rem;
    }
  
    .sm\:mt-4 {
      margin-top: 1rem;
    }
  
    .sm\:mr-4 {
      margin-right: 1rem;
    }
  
    .sm\:mb-4 {
      margin-bottom: 1rem;
    }
  
    .sm\:ml-4 {
      margin-left: 1rem;
    }
  
    .sm\:mt-6 {
      margin-top: 1.5rem;
    }
  
    .sm\:mr-6 {
      margin-right: 1.5rem;
    }
  
    .sm\:mb-6 {
      margin-bottom: 1.5rem;
    }
  
    .sm\:ml-6 {
      margin-left: 1.5rem;
    }
  
    .sm\:mt-8 {
      margin-top: 2rem;
    }
  
    .sm\:mr-8 {
      margin-right: 2rem;
    }
  
    .sm\:mb-8 {
      margin-bottom: 2rem;
    }
  
    .sm\:ml-8 {
      margin-left: 2rem;
    }
  
    .sm\:mt-auto {
      margin-top: auto;
    }
  
    .sm\:mr-auto {
      margin-right: auto;
    }
  
    .sm\:mb-auto {
      margin-bottom: auto;
    }
  
    .sm\:ml-auto {
      margin-left: auto;
    }
  
    .sm\:mt-px {
      margin-top: 1px;
    }
  
    .sm\:mr-px {
      margin-right: 1px;
    }
  
    .sm\:mb-px {
      margin-bottom: 1px;
    }
  
    .sm\:ml-px {
      margin-left: 1px;
    }
  
    .sm\:max-h-full {
      max-height: 100%;
    }
  
    .sm\:max-h-screen {
      max-height: 100vh;
    }
  
    .sm\:max-w-xs {
      max-width: 20rem;
    }
  
    .sm\:max-w-sm {
      max-width: 30rem;
    }
  
    .sm\:max-w-md {
      max-width: 40rem;
    }
  
    .sm\:max-w-lg {
      max-width: 50rem;
    }
  
    .sm\:max-w-xl {
      max-width: 60rem;
    }
  
    .sm\:max-w-2xl {
      max-width: 70rem;
    }
  
    .sm\:max-w-3xl {
      max-width: 80rem;
    }
  
    .sm\:max-w-4xl {
      max-width: 90rem;
    }
  
    .sm\:max-w-5xl {
      max-width: 100rem;
    }
  
    .sm\:max-w-full {
      max-width: 100%;
    }
  
    .sm\:min-h-0 {
      min-height: 0;
    }
  
    .sm\:min-h-full {
      min-height: 100%;
    }
  
    .sm\:min-h-screen {
      min-height: 100vh;
    }
  
    .sm\:min-w-0 {
      min-width: 0;
    }
  
    .sm\:min-w-full {
      min-width: 100%;
    }
  
    .sm\:-m-0 {
      margin: 0;
    }
  
    .sm\:-m-1 {
      margin: -0.25rem;
    }
  
    .sm\:-m-2 {
      margin: -0.5rem;
    }
  
    .sm\:-m-3 {
      margin: -0.75rem;
    }
  
    .sm\:-m-4 {
      margin: -1rem;
    }
  
    .sm\:-m-6 {
      margin: -1.5rem;
    }
  
    .sm\:-m-8 {
      margin: -2rem;
    }
  
    .sm\:-m-px {
      margin: -1px;
    }
  
    .sm\:-my-0 {
      margin-top: 0;
      margin-bottom: 0;
    }
  
    .sm\:-mx-0 {
      margin-left: 0;
      margin-right: 0;
    }
  
    .sm\:-my-1 {
      margin-top: -0.25rem;
      margin-bottom: -0.25rem;
    }
  
    .sm\:-mx-1 {
      margin-left: -0.25rem;
      margin-right: -0.25rem;
    }
  
    .sm\:-my-2 {
      margin-top: -0.5rem;
      margin-bottom: -0.5rem;
    }
  
    .sm\:-mx-2 {
      margin-left: -0.5rem;
      margin-right: -0.5rem;
    }
  
    .sm\:-my-3 {
      margin-top: -0.75rem;
      margin-bottom: -0.75rem;
    }
  
    .sm\:-mx-3 {
      margin-left: -0.75rem;
      margin-right: -0.75rem;
    }
  
    .sm\:-my-4 {
      margin-top: -1rem;
      margin-bottom: -1rem;
    }
  
    .sm\:-mx-4 {
      margin-left: -1rem;
      margin-right: -1rem;
    }
  
    .sm\:-my-6 {
      margin-top: -1.5rem;
      margin-bottom: -1.5rem;
    }
  
    .sm\:-mx-6 {
      margin-left: -1.5rem;
      margin-right: -1.5rem;
    }
  
    .sm\:-my-8 {
      margin-top: -2rem;
      margin-bottom: -2rem;
    }
  
    .sm\:-mx-8 {
      margin-left: -2rem;
      margin-right: -2rem;
    }
  
    .sm\:-my-px {
      margin-top: -1px;
      margin-bottom: -1px;
    }
  
    .sm\:-mx-px {
      margin-left: -1px;
      margin-right: -1px;
    }
  
    .sm\:-mt-0 {
      margin-top: 0;
    }
  
    .sm\:-mr-0 {
      margin-right: 0;
    }
  
    .sm\:-mb-0 {
      margin-bottom: 0;
    }
  
    .sm\:-ml-0 {
      margin-left: 0;
    }
  
    .sm\:-mt-1 {
      margin-top: -0.25rem;
    }
  
    .sm\:-mr-1 {
      margin-right: -0.25rem;
    }
  
    .sm\:-mb-1 {
      margin-bottom: -0.25rem;
    }
  
    .sm\:-ml-1 {
      margin-left: -0.25rem;
    }
  
    .sm\:-mt-2 {
      margin-top: -0.5rem;
    }
  
    .sm\:-mr-2 {
      margin-right: -0.5rem;
    }
  
    .sm\:-mb-2 {
      margin-bottom: -0.5rem;
    }
  
    .sm\:-ml-2 {
      margin-left: -0.5rem;
    }
  
    .sm\:-mt-3 {
      margin-top: -0.75rem;
    }
  
    .sm\:-mr-3 {
      margin-right: -0.75rem;
    }
  
    .sm\:-mb-3 {
      margin-bottom: -0.75rem;
    }
  
    .sm\:-ml-3 {
      margin-left: -0.75rem;
    }
  
    .sm\:-mt-4 {
      margin-top: -1rem;
    }
  
    .sm\:-mr-4 {
      margin-right: -1rem;
    }
  
    .sm\:-mb-4 {
      margin-bottom: -1rem;
    }
  
    .sm\:-ml-4 {
      margin-left: -1rem;
    }
  
    .sm\:-mt-6 {
      margin-top: -1.5rem;
    }
  
    .sm\:-mr-6 {
      margin-right: -1.5rem;
    }
  
    .sm\:-mb-6 {
      margin-bottom: -1.5rem;
    }
  
    .sm\:-ml-6 {
      margin-left: -1.5rem;
    }
  
    .sm\:-mt-8 {
      margin-top: -2rem;
    }
  
    .sm\:-mr-8 {
      margin-right: -2rem;
    }
  
    .sm\:-mb-8 {
      margin-bottom: -2rem;
    }
  
    .sm\:-ml-8 {
      margin-left: -2rem;
    }
  
    .sm\:-mt-px {
      margin-top: -1px;
    }
  
    .sm\:-mr-px {
      margin-right: -1px;
    }
  
    .sm\:-mb-px {
      margin-bottom: -1px;
    }
  
    .sm\:-ml-px {
      margin-left: -1px;
    }
  
    .sm\:opacity-0 {
      opacity: 0;
    }
  
    .sm\:opacity-25 {
      opacity: .25;
    }
  
    .sm\:opacity-50 {
      opacity: .5;
    }
  
    .sm\:opacity-75 {
      opacity: .75;
    }
  
    .sm\:opacity-100 {
      opacity: 1;
    }
  
    .sm\:overflow-auto {
      overflow: auto;
    }
  
    .sm\:overflow-hidden {
      overflow: hidden;
    }
  
    .sm\:overflow-visible {
      overflow: visible;
    }
  
    .sm\:overflow-scroll {
      overflow: scroll;
    }
  
    .sm\:overflow-x-scroll {
      overflow-x: auto;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
  
    .sm\:overflow-y-scroll {
      overflow-y: auto;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
  
    .sm\:scrolling-touch {
      -webkit-overflow-scrolling: touch;
    }
  
    .sm\:scrolling-auto {
      -webkit-overflow-scrolling: auto;
    }
  
    .sm\:p-0 {
      padding: 0;
    }
  
    .sm\:p-1 {
      padding: .25rem;
    }
  
    .sm\:p-2 {
      padding: .5rem;
    }
  
    .sm\:p-3 {
      padding: .75rem;
    }
  
    .sm\:p-4 {
      padding: 1rem;
    }
  
    .sm\:p-6 {
      padding: 1.5rem;
    }
  
    .sm\:p-8 {
      padding: 2rem;
    }
  
    .sm\:p-px {
      padding: 1px;
    }
  
    .sm\:py-0 {
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .sm\:px-0 {
      padding-left: 0;
      padding-right: 0;
    }
  
    .sm\:py-1 {
      padding-top: .25rem;
      padding-bottom: .25rem;
    }
  
    .sm\:px-1 {
      padding-left: .25rem;
      padding-right: .25rem;
    }
  
    .sm\:py-2 {
      padding-top: .5rem;
      padding-bottom: .5rem;
    }
  
    .sm\:px-2 {
      padding-left: .5rem;
      padding-right: .5rem;
    }
  
    .sm\:py-3 {
      padding-top: .75rem;
      padding-bottom: .75rem;
    }
  
    .sm\:px-3 {
      padding-left: .75rem;
      padding-right: .75rem;
    }
  
    .sm\:py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
  
    .sm\:px-4 {
      padding-left: 1rem;
      padding-right: 1rem;
    }
  
    .sm\:py-6 {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }
  
    .sm\:px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }
  
    .sm\:py-8 {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }
  
    .sm\:px-8 {
      padding-left: 2rem;
      padding-right: 2rem;
    }
  
    .sm\:py-px {
      padding-top: 1px;
      padding-bottom: 1px;
    }
  
    .sm\:px-px {
      padding-left: 1px;
      padding-right: 1px;
    }
  
    .sm\:pt-0 {
      padding-top: 0;
    }
  
    .sm\:pr-0 {
      padding-right: 0;
    }
  
    .sm\:pb-0 {
      padding-bottom: 0;
    }
  
    .sm\:pl-0 {
      padding-left: 0;
    }
  
    .sm\:pt-1 {
      padding-top: .25rem;
    }
  
    .sm\:pr-1 {
      padding-right: .25rem;
    }
  
    .sm\:pb-1 {
      padding-bottom: .25rem;
    }
  
    .sm\:pl-1 {
      padding-left: .25rem;
    }
  
    .sm\:pt-2 {
      padding-top: .5rem;
    }
  
    .sm\:pr-2 {
      padding-right: .5rem;
    }
  
    .sm\:pb-2 {
      padding-bottom: .5rem;
    }
  
    .sm\:pl-2 {
      padding-left: .5rem;
    }
  
    .sm\:pt-3 {
      padding-top: .75rem;
    }
  
    .sm\:pr-3 {
      padding-right: .75rem;
    }
  
    .sm\:pb-3 {
      padding-bottom: .75rem;
    }
  
    .sm\:pl-3 {
      padding-left: .75rem;
    }
  
    .sm\:pt-4 {
      padding-top: 1rem;
    }
  
    .sm\:pr-4 {
      padding-right: 1rem;
    }
  
    .sm\:pb-4 {
      padding-bottom: 1rem;
    }
  
    .sm\:pl-4 {
      padding-left: 1rem;
    }
  
    .sm\:pt-6 {
      padding-top: 1.5rem;
    }
  
    .sm\:pr-6 {
      padding-right: 1.5rem;
    }
  
    .sm\:pb-6 {
      padding-bottom: 1.5rem;
    }
  
    .sm\:pl-6 {
      padding-left: 1.5rem;
    }
  
    .sm\:pt-8 {
      padding-top: 2rem;
    }
  
    .sm\:pr-8 {
      padding-right: 2rem;
    }
  
    .sm\:pb-8 {
      padding-bottom: 2rem;
    }
  
    .sm\:pl-8 {
      padding-left: 2rem;
    }
  
    .sm\:pt-px {
      padding-top: 1px;
    }
  
    .sm\:pr-px {
      padding-right: 1px;
    }
  
    .sm\:pb-px {
      padding-bottom: 1px;
    }
  
    .sm\:pl-px {
      padding-left: 1px;
    }
  
    .sm\:pointer-events-none {
      pointer-events: none;
    }
  
    .sm\:pointer-events-auto {
      pointer-events: auto;
    }
  
    .sm\:static {
      position: static;
    }
  
    .sm\:fixed {
      position: fixed;
    }
  
    .sm\:absolute {
      position: absolute;
    }
  
    .sm\:relative {
      position: relative;
    }
  
    .sm\:pin-none {
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
    }
  
    .sm\:pin {
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
    }
  
    .sm\:pin-y {
      top: 0;
      bottom: 0;
    }
  
    .sm\:pin-x {
      right: 0;
      left: 0;
    }
  
    .sm\:pin-t {
      top: 0;
    }
  
    .sm\:pin-r {
      right: 0;
    }
  
    .sm\:pin-b {
      bottom: 0;
    }
  
    .sm\:pin-l {
      left: 0;
    }
  
    .sm\:resize-none {
      resize: none;
    }
  
    .sm\:resize-y {
      resize: vertical;
    }
  
    .sm\:resize-x {
      resize: horizontal;
    }
  
    .sm\:resize {
      resize: both;
    }
  
    .sm\:shadow {
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
    }
  
    .sm\:shadow-md {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08);
    }
  
    .sm\:shadow-lg {
      box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
    }
  
    .sm\:shadow-inner {
      box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, .06);
    }
  
    .sm\:shadow-none {
      box-shadow: none;
    }
  
    .sm\:text-left {
      text-align: left;
    }
  
    .sm\:text-center {
      text-align: center;
    }
  
    .sm\:text-right {
      text-align: right;
    }
  
    .sm\:text-justify {
      text-align: justify;
    }
  
    .sm\:text-transparent {
      color: transparent;
    }
  
    .sm\:text-black {
      color: #22292f;
    }
  
    .sm\:text-grey-darkest {
      color: #3d4852;
    }
  
    .sm\:text-grey-darker {
      color: #606f7b;
    }
  
    .sm\:text-grey-dark {
      color: #8795a1;
    }
  
    .sm\:text-grey {
      color: #b8c2cc;
    }
  
    .sm\:text-grey-light {
      color: #dae1e7;
    }
  
    .sm\:text-grey-lighter {
      color: #f1f5f8;
    }
  
    .sm\:text-grey-lightest {
      color: #f8fafc;
    }
  
    .sm\:text-white {
      color: #fff;
    }
  
    .sm\:text-red-darkest {
      color: #3b0d0c;
    }
  
    .sm\:text-red-darker {
      color: #621b18;
    }
  
    .sm\:text-red-dark {
      color: #cc1f1a;
    }
  
    .sm\:text-red {
      color: #e3342f;
    }
  
    .sm\:text-red-light {
      color: #ef5753;
    }
  
    .sm\:text-red-lighter {
      color: #f9acaa;
    }
  
    .sm\:text-red-lightest {
      color: #fcebea;
    }
  
    .sm\:text-orange-darkest {
      color: #462a16;
    }
  
    .sm\:text-orange-darker {
      color: #613b1f;
    }
  
    .sm\:text-orange-dark {
      color: #de751f;
    }
  
    .sm\:text-orange {
      color: #f6993f;
    }
  
    .sm\:text-orange-light {
      color: #faad63;
    }
  
    .sm\:text-orange-lighter {
      color: #fcd9b6;
    }
  
    .sm\:text-orange-lightest {
      color: #fff5eb;
    }
  
    .sm\:text-yellow-darkest {
      color: #453411;
    }
  
    .sm\:text-yellow-darker {
      color: #684f1d;
    }
  
    .sm\:text-yellow-dark {
      color: #f2d024;
    }
  
    .sm\:text-yellow {
      color: #ffed4a;
    }
  
    .sm\:text-yellow-light {
      color: #fff382;
    }
  
    .sm\:text-yellow-lighter {
      color: #fff9c2;
    }
  
    .sm\:text-yellow-lightest {
      color: #fcfbeb;
    }
  
    .sm\:text-green-darkest {
      color: #0f2f21;
    }
  
    .sm\:text-green-darker {
      color: #1a4731;
    }
  
    .sm\:text-green-dark {
      color: #1f9d55;
    }
  
    .sm\:text-green {
      color: #38c172;
    }
  
    .sm\:text-green-light {
      color: #51d88a;
    }
  
    .sm\:text-green-lighter {
      color: #a2f5bf;
    }
  
    .sm\:text-green-lightest {
      color: #e3fcec;
    }
  
    .sm\:text-teal-darkest {
      color: #0d3331;
    }
  
    .sm\:text-teal-darker {
      color: #20504f;
    }
  
    .sm\:text-teal-dark {
      color: #38a89d;
    }
  
    .sm\:text-teal {
      color: #4dc0b5;
    }
  
    .sm\:text-teal-light {
      color: #64d5ca;
    }
  
    .sm\:text-teal-lighter {
      color: #a0f0ed;
    }
  
    .sm\:text-teal-lightest {
      color: #e8fffe;
    }
  
    .sm\:text-blue-darkest {
      color: #12283a;
    }
  
    .sm\:text-blue-darker {
      color: #1c3d5a;
    }
  
    .sm\:text-blue-dark {
      color: #2779bd;
    }
  
    .sm\:text-blue {
      color: #3490dc;
    }
  
    .sm\:text-blue-light {
      color: #6cb2eb;
    }
  
    .sm\:text-blue-lighter {
      color: #bcdefa;
    }
  
    .sm\:text-blue-lightest {
      color: #eff8ff;
    }
  
    .sm\:text-indigo-darkest {
      color: #191e38;
    }
  
    .sm\:text-indigo-darker {
      color: #2f365f;
    }
  
    .sm\:text-indigo-dark {
      color: #5661b3;
    }
  
    .sm\:text-indigo {
      color: #6574cd;
    }
  
    .sm\:text-indigo-light {
      color: #7886d7;
    }
  
    .sm\:text-indigo-lighter {
      color: #b2b7ff;
    }
  
    .sm\:text-indigo-lightest {
      color: #e6e8ff;
    }
  
    .sm\:text-purple-darkest {
      color: #21183c;
    }
  
    .sm\:text-purple-darker {
      color: #382b5f;
    }
  
    .sm\:text-purple-dark {
      color: #794acf;
    }
  
    .sm\:text-purple {
      color: #9561e2;
    }
  
    .sm\:text-purple-light {
      color: #a779e9;
    }
  
    .sm\:text-purple-lighter {
      color: #d6bbfc;
    }
  
    .sm\:text-purple-lightest {
      color: #f3ebff;
    }
  
    .sm\:text-pink-darkest {
      color: #451225;
    }
  
    .sm\:text-pink-darker {
      color: #6f213f;
    }
  
    .sm\:text-pink-dark {
      color: #eb5286;
    }
  
    .sm\:text-pink {
      color: #f66d9b;
    }
  
    .sm\:text-pink-light {
      color: #fa7ea8;
    }
  
    .sm\:text-pink-lighter {
      color: #ffbbca;
    }
  
    .sm\:text-pink-lightest {
      color: #ffebef;
    }
  
    .sm\:hover\:text-transparent:hover {
      color: transparent;
    }
  
    .sm\:hover\:text-black:hover {
      color: #22292f;
    }
  
    .sm\:hover\:text-grey-darkest:hover {
      color: #3d4852;
    }
  
    .sm\:hover\:text-grey-darker:hover {
      color: #606f7b;
    }
  
    .sm\:hover\:text-grey-dark:hover {
      color: #8795a1;
    }
  
    .sm\:hover\:text-grey:hover {
      color: #b8c2cc;
    }
  
    .sm\:hover\:text-grey-light:hover {
      color: #dae1e7;
    }
  
    .sm\:hover\:text-grey-lighter:hover {
      color: #f1f5f8;
    }
  
    .sm\:hover\:text-grey-lightest:hover {
      color: #f8fafc;
    }
  
    .sm\:hover\:text-white:hover {
      color: #fff;
    }
  
    .sm\:hover\:text-red-darkest:hover {
      color: #3b0d0c;
    }
  
    .sm\:hover\:text-red-darker:hover {
      color: #621b18;
    }
  
    .sm\:hover\:text-red-dark:hover {
      color: #cc1f1a;
    }
  
    .sm\:hover\:text-red:hover {
      color: #e3342f;
    }
  
    .sm\:hover\:text-red-light:hover {
      color: #ef5753;
    }
  
    .sm\:hover\:text-red-lighter:hover {
      color: #f9acaa;
    }
  
    .sm\:hover\:text-red-lightest:hover {
      color: #fcebea;
    }
  
    .sm\:hover\:text-orange-darkest:hover {
      color: #462a16;
    }
  
    .sm\:hover\:text-orange-darker:hover {
      color: #613b1f;
    }
  
    .sm\:hover\:text-orange-dark:hover {
      color: #de751f;
    }
  
    .sm\:hover\:text-orange:hover {
      color: #f6993f;
    }
  
    .sm\:hover\:text-orange-light:hover {
      color: #faad63;
    }
  
    .sm\:hover\:text-orange-lighter:hover {
      color: #fcd9b6;
    }
  
    .sm\:hover\:text-orange-lightest:hover {
      color: #fff5eb;
    }
  
    .sm\:hover\:text-yellow-darkest:hover {
      color: #453411;
    }
  
    .sm\:hover\:text-yellow-darker:hover {
      color: #684f1d;
    }
  
    .sm\:hover\:text-yellow-dark:hover {
      color: #f2d024;
    }
  
    .sm\:hover\:text-yellow:hover {
      color: #ffed4a;
    }
  
    .sm\:hover\:text-yellow-light:hover {
      color: #fff382;
    }
  
    .sm\:hover\:text-yellow-lighter:hover {
      color: #fff9c2;
    }
  
    .sm\:hover\:text-yellow-lightest:hover {
      color: #fcfbeb;
    }
  
    .sm\:hover\:text-green-darkest:hover {
      color: #0f2f21;
    }
  
    .sm\:hover\:text-green-darker:hover {
      color: #1a4731;
    }
  
    .sm\:hover\:text-green-dark:hover {
      color: #1f9d55;
    }
  
    .sm\:hover\:text-green:hover {
      color: #38c172;
    }
  
    .sm\:hover\:text-green-light:hover {
      color: #51d88a;
    }
  
    .sm\:hover\:text-green-lighter:hover {
      color: #a2f5bf;
    }
  
    .sm\:hover\:text-green-lightest:hover {
      color: #e3fcec;
    }
  
    .sm\:hover\:text-teal-darkest:hover {
      color: #0d3331;
    }
  
    .sm\:hover\:text-teal-darker:hover {
      color: #20504f;
    }
  
    .sm\:hover\:text-teal-dark:hover {
      color: #38a89d;
    }
  
    .sm\:hover\:text-teal:hover {
      color: #4dc0b5;
    }
  
    .sm\:hover\:text-teal-light:hover {
      color: #64d5ca;
    }
  
    .sm\:hover\:text-teal-lighter:hover {
      color: #a0f0ed;
    }
  
    .sm\:hover\:text-teal-lightest:hover {
      color: #e8fffe;
    }
  
    .sm\:hover\:text-blue-darkest:hover {
      color: #12283a;
    }
  
    .sm\:hover\:text-blue-darker:hover {
      color: #1c3d5a;
    }
  
    .sm\:hover\:text-blue-dark:hover {
      color: #2779bd;
    }
  
    .sm\:hover\:text-blue:hover {
      color: #3490dc;
    }
  
    .sm\:hover\:text-blue-light:hover {
      color: #6cb2eb;
    }
  
    .sm\:hover\:text-blue-lighter:hover {
      color: #bcdefa;
    }
  
    .sm\:hover\:text-blue-lightest:hover {
      color: #eff8ff;
    }
  
    .sm\:hover\:text-indigo-darkest:hover {
      color: #191e38;
    }
  
    .sm\:hover\:text-indigo-darker:hover {
      color: #2f365f;
    }
  
    .sm\:hover\:text-indigo-dark:hover {
      color: #5661b3;
    }
  
    .sm\:hover\:text-indigo:hover {
      color: #6574cd;
    }
  
    .sm\:hover\:text-indigo-light:hover {
      color: #7886d7;
    }
  
    .sm\:hover\:text-indigo-lighter:hover {
      color: #b2b7ff;
    }
  
    .sm\:hover\:text-indigo-lightest:hover {
      color: #e6e8ff;
    }
  
    .sm\:hover\:text-purple-darkest:hover {
      color: #21183c;
    }
  
    .sm\:hover\:text-purple-darker:hover {
      color: #382b5f;
    }
  
    .sm\:hover\:text-purple-dark:hover {
      color: #794acf;
    }
  
    .sm\:hover\:text-purple:hover {
      color: #9561e2;
    }
  
    .sm\:hover\:text-purple-light:hover {
      color: #a779e9;
    }
  
    .sm\:hover\:text-purple-lighter:hover {
      color: #d6bbfc;
    }
  
    .sm\:hover\:text-purple-lightest:hover {
      color: #f3ebff;
    }
  
    .sm\:hover\:text-pink-darkest:hover {
      color: #451225;
    }
  
    .sm\:hover\:text-pink-darker:hover {
      color: #6f213f;
    }
  
    .sm\:hover\:text-pink-dark:hover {
      color: #eb5286;
    }
  
    .sm\:hover\:text-pink:hover {
      color: #f66d9b;
    }
  
    .sm\:hover\:text-pink-light:hover {
      color: #fa7ea8;
    }
  
    .sm\:hover\:text-pink-lighter:hover {
      color: #ffbbca;
    }
  
    .sm\:hover\:text-pink-lightest:hover {
      color: #ffebef;
    }
  
    .sm\:text-xs {
      font-size: .75rem;
    }
  
    .sm\:text-sm {
      font-size: .875rem;
    }
  
    .sm\:text-base {
      font-size: 1rem;
    }
  
    .sm\:text-lg {
      font-size: 1.125rem;
    }
  
    .sm\:text-xl {
      font-size: 1.25rem;
    }
  
    .sm\:text-2xl {
      font-size: 1.5rem;
    }
  
    .sm\:text-3xl {
      font-size: 1.875rem;
    }
  
    .sm\:text-4xl {
      font-size: 2.25rem;
    }
  
    .sm\:text-5xl {
      font-size: 3rem;
    }
  
    .sm\:italic {
      font-style: italic;
    }
  
    .sm\:roman {
      font-style: normal;
    }
  
    .sm\:uppercase {
      text-transform: uppercase;
    }
  
    .sm\:lowercase {
      text-transform: lowercase;
    }
  
    .sm\:capitalize {
      text-transform: capitalize;
    }
  
    .sm\:normal-case {
      text-transform: none;
    }
  
    .sm\:underline {
      text-decoration: underline;
    }
  
    .sm\:line-through {
      text-decoration: line-through;
    }
  
    .sm\:no-underline {
      text-decoration: none;
    }
  
    .sm\:antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  
    .sm\:subpixel-antialiased {
      -webkit-font-smoothing: auto;
      -moz-osx-font-smoothing: auto;
    }
  
    .sm\:hover\:italic:hover {
      font-style: italic;
    }
  
    .sm\:hover\:roman:hover {
      font-style: normal;
    }
  
    .sm\:hover\:uppercase:hover {
      text-transform: uppercase;
    }
  
    .sm\:hover\:lowercase:hover {
      text-transform: lowercase;
    }
  
    .sm\:hover\:capitalize:hover {
      text-transform: capitalize;
    }
  
    .sm\:hover\:normal-case:hover {
      text-transform: none;
    }
  
    .sm\:hover\:underline:hover {
      text-decoration: underline;
    }
  
    .sm\:hover\:line-through:hover {
      text-decoration: line-through;
    }
  
    .sm\:hover\:no-underline:hover {
      text-decoration: none;
    }
  
    .sm\:hover\:antialiased:hover {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  
    .sm\:hover\:subpixel-antialiased:hover {
      -webkit-font-smoothing: auto;
      -moz-osx-font-smoothing: auto;
    }
  
    .sm\:tracking-tight {
      letter-spacing: -0.05em;
    }
  
    .sm\:tracking-normal {
      letter-spacing: 0;
    }
  
    .sm\:tracking-wide {
      letter-spacing: .05em;
    }
  
    .sm\:select-none {
      user-select: none;
    }
  
    .sm\:select-text {
      user-select: text;
    }
  
    .sm\:align-baseline {
      vertical-align: baseline;
    }
  
    .sm\:align-top {
      vertical-align: top;
    }
  
    .sm\:align-middle {
      vertical-align: middle;
    }
  
    .sm\:align-bottom {
      vertical-align: bottom;
    }
  
    .sm\:align-text-top {
      vertical-align: text-top;
    }
  
    .sm\:align-text-bottom {
      vertical-align: text-bottom;
    }
  
    .sm\:visible {
      visibility: visible;
    }
  
    .sm\:invisible {
      visibility: hidden;
    }
  
    .sm\:whitespace-normal {
      white-space: normal;
    }
  
    .sm\:whitespace-no-wrap {
      white-space: nowrap;
    }
  
    .sm\:whitespace-pre {
      white-space: pre;
    }
  
    .sm\:whitespace-pre-line {
      white-space: pre-line;
    }
  
    .sm\:whitespace-pre-wrap {
      white-space: pre-wrap;
    }
  
    .sm\:break-words {
      word-wrap: break-word;
    }
  
    .sm\:break-normal {
      word-wrap: normal;
    }
  
    .sm\:truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
  
    .sm\:w-1 {
      width: .25rem;
    }
  
    .sm\:w-2 {
      width: .5rem;
    }
  
    .sm\:w-3 {
      width: .75rem;
    }
  
    .sm\:w-4 {
      width: 1rem;
    }
  
    .sm\:w-6 {
      width: 1.5rem;
    }
  
    .sm\:w-8 {
      width: 2rem;
    }
  
    .sm\:w-10 {
      width: 2.5rem;
    }
  
    .sm\:w-12 {
      width: 3rem;
    }
  
    .sm\:w-16 {
      width: 4rem;
    }
  
    .sm\:w-24 {
      width: 6rem;
    }
  
    .sm\:w-32 {
      width: 8rem;
    }
  
    .sm\:w-48 {
      width: 12rem;
    }
  
    .sm\:w-64 {
      width: 16rem;
    }
  
    .sm\:w-auto {
      width: auto;
    }
  
    .sm\:w-px {
      width: 1px;
    }
  
    .sm\:w-1\/2 {
      width: 50%;
    }
  
    .sm\:w-1\/3 {
      width: 33.33333%;
    }
  
    .sm\:w-2\/3 {
      width: 66.66667%;
    }
  
    .sm\:w-1\/4 {
      width: 25%;
    }
  
    .sm\:w-3\/4 {
      width: 75%;
    }
  
    .sm\:w-1\/5 {
      width: 20%;
    }
  
    .sm\:w-2\/5 {
      width: 40%;
    }
  
    .sm\:w-3\/5 {
      width: 60%;
    }
  
    .sm\:w-4\/5 {
      width: 80%;
    }
  
    .sm\:w-1\/6 {
      width: 16.66667%;
    }
  
    .sm\:w-5\/6 {
      width: 83.33333%;
    }
  
    .sm\:w-full {
      width: 100%;
    }
  
    .sm\:w-screen {
      width: 100vw;
    }
  
    .sm\:z-0 {
      z-index: 0;
    }
  
    .sm\:z-10 {
      z-index: 10;
    }
  
    .sm\:z-20 {
      z-index: 20;
    }
  
    .sm\:z-30 {
      z-index: 30;
    }
  
    .sm\:z-40 {
      z-index: 40;
    }
  
    .sm\:z-50 {
      z-index: 50;
    }
  
    .sm\:z-auto {
      z-index: auto;
    }
  }
  
  @media (min-width: 768px) {
    .md\:list-reset {
      list-style: none;
      padding: 0;
    }
  
    .md\:appearance-none {
      appearance: none;
    }
  
    .md\:bg-fixed {
      background-attachment: fixed;
    }
  
    .md\:bg-local {
      background-attachment: local;
    }
  
    .md\:bg-scroll {
      background-attachment: scroll;
    }
  
    .md\:bg-transparent {
      background-color: transparent;
    }
  
    .md\:bg-black {
      background-color: #22292f;
    }
  
    .md\:bg-grey-darkest {
      background-color: #3d4852;
    }
  
    .md\:bg-grey-darker {
      background-color: #606f7b;
    }
  
    .md\:bg-grey-dark {
      background-color: #8795a1;
    }
  
    .md\:bg-grey {
      background-color: #b8c2cc;
    }
  
    .md\:bg-grey-light {
      background-color: #dae1e7;
    }
  
    .md\:bg-grey-lighter {
      background-color: #f1f5f8;
    }
  
    .md\:bg-grey-lightest {
      background-color: #f8fafc;
    }
  
    .md\:bg-white {
      background-color: #fff;
    }
  
    .md\:bg-red-darkest {
      background-color: #3b0d0c;
    }
  
    .md\:bg-red-darker {
      background-color: #621b18;
    }
  
    .md\:bg-red-dark {
      background-color: #cc1f1a;
    }
  
    .md\:bg-red {
      background-color: #e3342f;
    }
  
    .md\:bg-red-light {
      background-color: #ef5753;
    }
  
    .md\:bg-red-lighter {
      background-color: #f9acaa;
    }
  
    .md\:bg-red-lightest {
      background-color: #fcebea;
    }
  
    .md\:bg-orange-darkest {
      background-color: #462a16;
    }
  
    .md\:bg-orange-darker {
      background-color: #613b1f;
    }
  
    .md\:bg-orange-dark {
      background-color: #de751f;
    }
  
    .md\:bg-orange {
      background-color: #f6993f;
    }
  
    .md\:bg-orange-light {
      background-color: #faad63;
    }
  
    .md\:bg-orange-lighter {
      background-color: #fcd9b6;
    }
  
    .md\:bg-orange-lightest {
      background-color: #fff5eb;
    }
  
    .md\:bg-yellow-darkest {
      background-color: #453411;
    }
  
    .md\:bg-yellow-darker {
      background-color: #684f1d;
    }
  
    .md\:bg-yellow-dark {
      background-color: #f2d024;
    }
  
    .md\:bg-yellow {
      background-color: #ffed4a;
    }
  
    .md\:bg-yellow-light {
      background-color: #fff382;
    }
  
    .md\:bg-yellow-lighter {
      background-color: #fff9c2;
    }
  
    .md\:bg-yellow-lightest {
      background-color: #fcfbeb;
    }
  
    .md\:bg-green-darkest {
      background-color: #0f2f21;
    }
  
    .md\:bg-green-darker {
      background-color: #1a4731;
    }
  
    .md\:bg-green-dark {
      background-color: #1f9d55;
    }
  
    .md\:bg-green {
      background-color: #38c172;
    }
  
    .md\:bg-green-light {
      background-color: #51d88a;
    }
  
    .md\:bg-green-lighter {
      background-color: #a2f5bf;
    }
  
    .md\:bg-green-lightest {
      background-color: #e3fcec;
    }
  
    .md\:bg-teal-darkest {
      background-color: #0d3331;
    }
  
    .md\:bg-teal-darker {
      background-color: #20504f;
    }
  
    .md\:bg-teal-dark {
      background-color: #38a89d;
    }
  
    .md\:bg-teal {
      background-color: #4dc0b5;
    }
  
    .md\:bg-teal-light {
      background-color: #64d5ca;
    }
  
    .md\:bg-teal-lighter {
      background-color: #a0f0ed;
    }
  
    .md\:bg-teal-lightest {
      background-color: #e8fffe;
    }
  
    .md\:bg-blue-darkest {
      background-color: #12283a;
    }
  
    .md\:bg-blue-darker {
      background-color: #1c3d5a;
    }
  
    .md\:bg-blue-dark {
      background-color: #2779bd;
    }
  
    .md\:bg-blue {
      background-color: #3490dc;
    }
  
    .md\:bg-blue-light {
      background-color: #6cb2eb;
    }
  
    .md\:bg-blue-lighter {
      background-color: #bcdefa;
    }
  
    .md\:bg-blue-lightest {
      background-color: #eff8ff;
    }
  
    .md\:bg-indigo-darkest {
      background-color: #191e38;
    }
  
    .md\:bg-indigo-darker {
      background-color: #2f365f;
    }
  
    .md\:bg-indigo-dark {
      background-color: #5661b3;
    }
  
    .md\:bg-indigo {
      background-color: #6574cd;
    }
  
    .md\:bg-indigo-light {
      background-color: #7886d7;
    }
  
    .md\:bg-indigo-lighter {
      background-color: #b2b7ff;
    }
  
    .md\:bg-indigo-lightest {
      background-color: #e6e8ff;
    }
  
    .md\:bg-purple-darkest {
      background-color: #21183c;
    }
  
    .md\:bg-purple-darker {
      background-color: #382b5f;
    }
  
    .md\:bg-purple-dark {
      background-color: #794acf;
    }
  
    .md\:bg-purple {
      background-color: #9561e2;
    }
  
    .md\:bg-purple-light {
      background-color: #a779e9;
    }
  
    .md\:bg-purple-lighter {
      background-color: #d6bbfc;
    }
  
    .md\:bg-purple-lightest {
      background-color: #f3ebff;
    }
  
    .md\:bg-pink-darkest {
      background-color: #451225;
    }
  
    .md\:bg-pink-darker {
      background-color: #6f213f;
    }
  
    .md\:bg-pink-dark {
      background-color: #eb5286;
    }
  
    .md\:bg-pink {
      background-color: #f66d9b;
    }
  
    .md\:bg-pink-light {
      background-color: #fa7ea8;
    }
  
    .md\:bg-pink-lighter {
      background-color: #ffbbca;
    }
  
    .md\:bg-pink-lightest {
      background-color: #ffebef;
    }
  
    .md\:hover\:bg-transparent:hover {
      background-color: transparent;
    }
  
    .md\:hover\:bg-black:hover {
      background-color: #22292f;
    }
  
    .md\:hover\:bg-grey-darkest:hover {
      background-color: #3d4852;
    }
  
    .md\:hover\:bg-grey-darker:hover {
      background-color: #606f7b;
    }
  
    .md\:hover\:bg-grey-dark:hover {
      background-color: #8795a1;
    }
  
    .md\:hover\:bg-grey:hover {
      background-color: #b8c2cc;
    }
  
    .md\:hover\:bg-grey-light:hover {
      background-color: #dae1e7;
    }
  
    .md\:hover\:bg-grey-lighter:hover {
      background-color: #f1f5f8;
    }
  
    .md\:hover\:bg-grey-lightest:hover {
      background-color: #f8fafc;
    }
  
    .md\:hover\:bg-white:hover {
      background-color: #fff;
    }
  
    .md\:hover\:bg-red-darkest:hover {
      background-color: #3b0d0c;
    }
  
    .md\:hover\:bg-red-darker:hover {
      background-color: #621b18;
    }
  
    .md\:hover\:bg-red-dark:hover {
      background-color: #cc1f1a;
    }
  
    .md\:hover\:bg-red:hover {
      background-color: #e3342f;
    }
  
    .md\:hover\:bg-red-light:hover {
      background-color: #ef5753;
    }
  
    .md\:hover\:bg-red-lighter:hover {
      background-color: #f9acaa;
    }
  
    .md\:hover\:bg-red-lightest:hover {
      background-color: #fcebea;
    }
  
    .md\:hover\:bg-orange-darkest:hover {
      background-color: #462a16;
    }
  
    .md\:hover\:bg-orange-darker:hover {
      background-color: #613b1f;
    }
  
    .md\:hover\:bg-orange-dark:hover {
      background-color: #de751f;
    }
  
    .md\:hover\:bg-orange:hover {
      background-color: #f6993f;
    }
  
    .md\:hover\:bg-orange-light:hover {
      background-color: #faad63;
    }
  
    .md\:hover\:bg-orange-lighter:hover {
      background-color: #fcd9b6;
    }
  
    .md\:hover\:bg-orange-lightest:hover {
      background-color: #fff5eb;
    }
  
    .md\:hover\:bg-yellow-darkest:hover {
      background-color: #453411;
    }
  
    .md\:hover\:bg-yellow-darker:hover {
      background-color: #684f1d;
    }
  
    .md\:hover\:bg-yellow-dark:hover {
      background-color: #f2d024;
    }
  
    .md\:hover\:bg-yellow:hover {
      background-color: #ffed4a;
    }
  
    .md\:hover\:bg-yellow-light:hover {
      background-color: #fff382;
    }
  
    .md\:hover\:bg-yellow-lighter:hover {
      background-color: #fff9c2;
    }
  
    .md\:hover\:bg-yellow-lightest:hover {
      background-color: #fcfbeb;
    }
  
    .md\:hover\:bg-green-darkest:hover {
      background-color: #0f2f21;
    }
  
    .md\:hover\:bg-green-darker:hover {
      background-color: #1a4731;
    }
  
    .md\:hover\:bg-green-dark:hover {
      background-color: #1f9d55;
    }
  
    .md\:hover\:bg-green:hover {
      background-color: #38c172;
    }
  
    .md\:hover\:bg-green-light:hover {
      background-color: #51d88a;
    }
  
    .md\:hover\:bg-green-lighter:hover {
      background-color: #a2f5bf;
    }
  
    .md\:hover\:bg-green-lightest:hover {
      background-color: #e3fcec;
    }
  
    .md\:hover\:bg-teal-darkest:hover {
      background-color: #0d3331;
    }
  
    .md\:hover\:bg-teal-darker:hover {
      background-color: #20504f;
    }
  
    .md\:hover\:bg-teal-dark:hover {
      background-color: #38a89d;
    }
  
    .md\:hover\:bg-teal:hover {
      background-color: #4dc0b5;
    }
  
    .md\:hover\:bg-teal-light:hover {
      background-color: #64d5ca;
    }
  
    .md\:hover\:bg-teal-lighter:hover {
      background-color: #a0f0ed;
    }
  
    .md\:hover\:bg-teal-lightest:hover {
      background-color: #e8fffe;
    }
  
    .md\:hover\:bg-blue-darkest:hover {
      background-color: #12283a;
    }
  
    .md\:hover\:bg-blue-darker:hover {
      background-color: #1c3d5a;
    }
  
    .md\:hover\:bg-blue-dark:hover {
      background-color: #2779bd;
    }
  
    .md\:hover\:bg-blue:hover {
      background-color: #3490dc;
    }
  
    .md\:hover\:bg-blue-light:hover {
      background-color: #6cb2eb;
    }
  
    .md\:hover\:bg-blue-lighter:hover {
      background-color: #bcdefa;
    }
  
    .md\:hover\:bg-blue-lightest:hover {
      background-color: #eff8ff;
    }
  
    .md\:hover\:bg-indigo-darkest:hover {
      background-color: #191e38;
    }
  
    .md\:hover\:bg-indigo-darker:hover {
      background-color: #2f365f;
    }
  
    .md\:hover\:bg-indigo-dark:hover {
      background-color: #5661b3;
    }
  
    .md\:hover\:bg-indigo:hover {
      background-color: #6574cd;
    }
  
    .md\:hover\:bg-indigo-light:hover {
      background-color: #7886d7;
    }
  
    .md\:hover\:bg-indigo-lighter:hover {
      background-color: #b2b7ff;
    }
  
    .md\:hover\:bg-indigo-lightest:hover {
      background-color: #e6e8ff;
    }
  
    .md\:hover\:bg-purple-darkest:hover {
      background-color: #21183c;
    }
  
    .md\:hover\:bg-purple-darker:hover {
      background-color: #382b5f;
    }
  
    .md\:hover\:bg-purple-dark:hover {
      background-color: #794acf;
    }
  
    .md\:hover\:bg-purple:hover {
      background-color: #9561e2;
    }
  
    .md\:hover\:bg-purple-light:hover {
      background-color: #a779e9;
    }
  
    .md\:hover\:bg-purple-lighter:hover {
      background-color: #d6bbfc;
    }
  
    .md\:hover\:bg-purple-lightest:hover {
      background-color: #f3ebff;
    }
  
    .md\:hover\:bg-pink-darkest:hover {
      background-color: #451225;
    }
  
    .md\:hover\:bg-pink-darker:hover {
      background-color: #6f213f;
    }
  
    .md\:hover\:bg-pink-dark:hover {
      background-color: #eb5286;
    }
  
    .md\:hover\:bg-pink:hover {
      background-color: #f66d9b;
    }
  
    .md\:hover\:bg-pink-light:hover {
      background-color: #fa7ea8;
    }
  
    .md\:hover\:bg-pink-lighter:hover {
      background-color: #ffbbca;
    }
  
    .md\:hover\:bg-pink-lightest:hover {
      background-color: #ffebef;
    }
  
    .md\:bg-bottom {
      background-position: bottom;
    }
  
    .md\:bg-center {
      background-position: center;
    }
  
    .md\:bg-left {
      background-position: left;
    }
  
    .md\:bg-left-bottom {
      background-position: left bottom;
    }
  
    .md\:bg-left-top {
      background-position: left top;
    }
  
    .md\:bg-right {
      background-position: right;
    }
  
    .md\:bg-right-bottom {
      background-position: right bottom;
    }
  
    .md\:bg-right-top {
      background-position: right top;
    }
  
    .md\:bg-top {
      background-position: top;
    }
  
    .md\:bg-repeat {
      background-repeat: repeat;
    }
  
    .md\:bg-no-repeat {
      background-repeat: no-repeat;
    }
  
    .md\:bg-repeat-x {
      background-repeat: repeat-x;
    }
  
    .md\:bg-repeat-y {
      background-repeat: repeat-y;
    }
  
    .md\:bg-cover {
      background-size: cover;
    }
  
    .md\:bg-contain {
      background-size: contain;
    }
  
    .md\:border-transparent {
      border-color: transparent;
    }
  
    .md\:border-black {
      border-color: #22292f;
    }
  
    .md\:border-grey-darkest {
      border-color: #3d4852;
    }
  
    .md\:border-grey-darker {
      border-color: #606f7b;
    }
  
    .md\:border-grey-dark {
      border-color: #8795a1;
    }
  
    .md\:border-grey {
      border-color: #b8c2cc;
    }
  
    .md\:border-grey-light {
      border-color: #dae1e7;
    }
  
    .md\:border-grey-lighter {
      border-color: #f1f5f8;
    }
  
    .md\:border-grey-lightest {
      border-color: #f8fafc;
    }
  
    .md\:border-white {
      border-color: #fff;
    }
  
    .md\:border-red-darkest {
      border-color: #3b0d0c;
    }
  
    .md\:border-red-darker {
      border-color: #621b18;
    }
  
    .md\:border-red-dark {
      border-color: #cc1f1a;
    }
  
    .md\:border-red {
      border-color: #e3342f;
    }
  
    .md\:border-red-light {
      border-color: #ef5753;
    }
  
    .md\:border-red-lighter {
      border-color: #f9acaa;
    }
  
    .md\:border-red-lightest {
      border-color: #fcebea;
    }
  
    .md\:border-orange-darkest {
      border-color: #462a16;
    }
  
    .md\:border-orange-darker {
      border-color: #613b1f;
    }
  
    .md\:border-orange-dark {
      border-color: #de751f;
    }
  
    .md\:border-orange {
      border-color: #f6993f;
    }
  
    .md\:border-orange-light {
      border-color: #faad63;
    }
  
    .md\:border-orange-lighter {
      border-color: #fcd9b6;
    }
  
    .md\:border-orange-lightest {
      border-color: #fff5eb;
    }
  
    .md\:border-yellow-darkest {
      border-color: #453411;
    }
  
    .md\:border-yellow-darker {
      border-color: #684f1d;
    }
  
    .md\:border-yellow-dark {
      border-color: #f2d024;
    }
  
    .md\:border-yellow {
      border-color: #ffed4a;
    }
  
    .md\:border-yellow-light {
      border-color: #fff382;
    }
  
    .md\:border-yellow-lighter {
      border-color: #fff9c2;
    }
  
    .md\:border-yellow-lightest {
      border-color: #fcfbeb;
    }
  
    .md\:border-green-darkest {
      border-color: #0f2f21;
    }
  
    .md\:border-green-darker {
      border-color: #1a4731;
    }
  
    .md\:border-green-dark {
      border-color: #1f9d55;
    }
  
    .md\:border-green {
      border-color: #38c172;
    }
  
    .md\:border-green-light {
      border-color: #51d88a;
    }
  
    .md\:border-green-lighter {
      border-color: #a2f5bf;
    }
  
    .md\:border-green-lightest {
      border-color: #e3fcec;
    }
  
    .md\:border-teal-darkest {
      border-color: #0d3331;
    }
  
    .md\:border-teal-darker {
      border-color: #20504f;
    }
  
    .md\:border-teal-dark {
      border-color: #38a89d;
    }
  
    .md\:border-teal {
      border-color: #4dc0b5;
    }
  
    .md\:border-teal-light {
      border-color: #64d5ca;
    }
  
    .md\:border-teal-lighter {
      border-color: #a0f0ed;
    }
  
    .md\:border-teal-lightest {
      border-color: #e8fffe;
    }
  
    .md\:border-blue-darkest {
      border-color: #12283a;
    }
  
    .md\:border-blue-darker {
      border-color: #1c3d5a;
    }
  
    .md\:border-blue-dark {
      border-color: #2779bd;
    }
  
    .md\:border-blue {
      border-color: #3490dc;
    }
  
    .md\:border-blue-light {
      border-color: #6cb2eb;
    }
  
    .md\:border-blue-lighter {
      border-color: #bcdefa;
    }
  
    .md\:border-blue-lightest {
      border-color: #eff8ff;
    }
  
    .md\:border-indigo-darkest {
      border-color: #191e38;
    }
  
    .md\:border-indigo-darker {
      border-color: #2f365f;
    }
  
    .md\:border-indigo-dark {
      border-color: #5661b3;
    }
  
    .md\:border-indigo {
      border-color: #6574cd;
    }
  
    .md\:border-indigo-light {
      border-color: #7886d7;
    }
  
    .md\:border-indigo-lighter {
      border-color: #b2b7ff;
    }
  
    .md\:border-indigo-lightest {
      border-color: #e6e8ff;
    }
  
    .md\:border-purple-darkest {
      border-color: #21183c;
    }
  
    .md\:border-purple-darker {
      border-color: #382b5f;
    }
  
    .md\:border-purple-dark {
      border-color: #794acf;
    }
  
    .md\:border-purple {
      border-color: #9561e2;
    }
  
    .md\:border-purple-light {
      border-color: #a779e9;
    }
  
    .md\:border-purple-lighter {
      border-color: #d6bbfc;
    }
  
    .md\:border-purple-lightest {
      border-color: #f3ebff;
    }
  
    .md\:border-pink-darkest {
      border-color: #451225;
    }
  
    .md\:border-pink-darker {
      border-color: #6f213f;
    }
  
    .md\:border-pink-dark {
      border-color: #eb5286;
    }
  
    .md\:border-pink {
      border-color: #f66d9b;
    }
  
    .md\:border-pink-light {
      border-color: #fa7ea8;
    }
  
    .md\:border-pink-lighter {
      border-color: #ffbbca;
    }
  
    .md\:border-pink-lightest {
      border-color: #ffebef;
    }
  
    .md\:hover\:border-transparent:hover {
      border-color: transparent;
    }
  
    .md\:hover\:border-black:hover {
      border-color: #22292f;
    }
  
    .md\:hover\:border-grey-darkest:hover {
      border-color: #3d4852;
    }
  
    .md\:hover\:border-grey-darker:hover {
      border-color: #606f7b;
    }
  
    .md\:hover\:border-grey-dark:hover {
      border-color: #8795a1;
    }
  
    .md\:hover\:border-grey:hover {
      border-color: #b8c2cc;
    }
  
    .md\:hover\:border-grey-light:hover {
      border-color: #dae1e7;
    }
  
    .md\:hover\:border-grey-lighter:hover {
      border-color: #f1f5f8;
    }
  
    .md\:hover\:border-grey-lightest:hover {
      border-color: #f8fafc;
    }
  
    .md\:hover\:border-white:hover {
      border-color: #fff;
    }
  
    .md\:hover\:border-red-darkest:hover {
      border-color: #3b0d0c;
    }
  
    .md\:hover\:border-red-darker:hover {
      border-color: #621b18;
    }
  
    .md\:hover\:border-red-dark:hover {
      border-color: #cc1f1a;
    }
  
    .md\:hover\:border-red:hover {
      border-color: #e3342f;
    }
  
    .md\:hover\:border-red-light:hover {
      border-color: #ef5753;
    }
  
    .md\:hover\:border-red-lighter:hover {
      border-color: #f9acaa;
    }
  
    .md\:hover\:border-red-lightest:hover {
      border-color: #fcebea;
    }
  
    .md\:hover\:border-orange-darkest:hover {
      border-color: #462a16;
    }
  
    .md\:hover\:border-orange-darker:hover {
      border-color: #613b1f;
    }
  
    .md\:hover\:border-orange-dark:hover {
      border-color: #de751f;
    }
  
    .md\:hover\:border-orange:hover {
      border-color: #f6993f;
    }
  
    .md\:hover\:border-orange-light:hover {
      border-color: #faad63;
    }
  
    .md\:hover\:border-orange-lighter:hover {
      border-color: #fcd9b6;
    }
  
    .md\:hover\:border-orange-lightest:hover {
      border-color: #fff5eb;
    }
  
    .md\:hover\:border-yellow-darkest:hover {
      border-color: #453411;
    }
  
    .md\:hover\:border-yellow-darker:hover {
      border-color: #684f1d;
    }
  
    .md\:hover\:border-yellow-dark:hover {
      border-color: #f2d024;
    }
  
    .md\:hover\:border-yellow:hover {
      border-color: #ffed4a;
    }
  
    .md\:hover\:border-yellow-light:hover {
      border-color: #fff382;
    }
  
    .md\:hover\:border-yellow-lighter:hover {
      border-color: #fff9c2;
    }
  
    .md\:hover\:border-yellow-lightest:hover {
      border-color: #fcfbeb;
    }
  
    .md\:hover\:border-green-darkest:hover {
      border-color: #0f2f21;
    }
  
    .md\:hover\:border-green-darker:hover {
      border-color: #1a4731;
    }
  
    .md\:hover\:border-green-dark:hover {
      border-color: #1f9d55;
    }
  
    .md\:hover\:border-green:hover {
      border-color: #38c172;
    }
  
    .md\:hover\:border-green-light:hover {
      border-color: #51d88a;
    }
  
    .md\:hover\:border-green-lighter:hover {
      border-color: #a2f5bf;
    }
  
    .md\:hover\:border-green-lightest:hover {
      border-color: #e3fcec;
    }
  
    .md\:hover\:border-teal-darkest:hover {
      border-color: #0d3331;
    }
  
    .md\:hover\:border-teal-darker:hover {
      border-color: #20504f;
    }
  
    .md\:hover\:border-teal-dark:hover {
      border-color: #38a89d;
    }
  
    .md\:hover\:border-teal:hover {
      border-color: #4dc0b5;
    }
  
    .md\:hover\:border-teal-light:hover {
      border-color: #64d5ca;
    }
  
    .md\:hover\:border-teal-lighter:hover {
      border-color: #a0f0ed;
    }
  
    .md\:hover\:border-teal-lightest:hover {
      border-color: #e8fffe;
    }
  
    .md\:hover\:border-blue-darkest:hover {
      border-color: #12283a;
    }
  
    .md\:hover\:border-blue-darker:hover {
      border-color: #1c3d5a;
    }
  
    .md\:hover\:border-blue-dark:hover {
      border-color: #2779bd;
    }
  
    .md\:hover\:border-blue:hover {
      border-color: #3490dc;
    }
  
    .md\:hover\:border-blue-light:hover {
      border-color: #6cb2eb;
    }
  
    .md\:hover\:border-blue-lighter:hover {
      border-color: #bcdefa;
    }
  
    .md\:hover\:border-blue-lightest:hover {
      border-color: #eff8ff;
    }
  
    .md\:hover\:border-indigo-darkest:hover {
      border-color: #191e38;
    }
  
    .md\:hover\:border-indigo-darker:hover {
      border-color: #2f365f;
    }
  
    .md\:hover\:border-indigo-dark:hover {
      border-color: #5661b3;
    }
  
    .md\:hover\:border-indigo:hover {
      border-color: #6574cd;
    }
  
    .md\:hover\:border-indigo-light:hover {
      border-color: #7886d7;
    }
  
    .md\:hover\:border-indigo-lighter:hover {
      border-color: #b2b7ff;
    }
  
    .md\:hover\:border-indigo-lightest:hover {
      border-color: #e6e8ff;
    }
  
    .md\:hover\:border-purple-darkest:hover {
      border-color: #21183c;
    }
  
    .md\:hover\:border-purple-darker:hover {
      border-color: #382b5f;
    }
  
    .md\:hover\:border-purple-dark:hover {
      border-color: #794acf;
    }
  
    .md\:hover\:border-purple:hover {
      border-color: #9561e2;
    }
  
    .md\:hover\:border-purple-light:hover {
      border-color: #a779e9;
    }
  
    .md\:hover\:border-purple-lighter:hover {
      border-color: #d6bbfc;
    }
  
    .md\:hover\:border-purple-lightest:hover {
      border-color: #f3ebff;
    }
  
    .md\:hover\:border-pink-darkest:hover {
      border-color: #451225;
    }
  
    .md\:hover\:border-pink-darker:hover {
      border-color: #6f213f;
    }
  
    .md\:hover\:border-pink-dark:hover {
      border-color: #eb5286;
    }
  
    .md\:hover\:border-pink:hover {
      border-color: #f66d9b;
    }
  
    .md\:hover\:border-pink-light:hover {
      border-color: #fa7ea8;
    }
  
    .md\:hover\:border-pink-lighter:hover {
      border-color: #ffbbca;
    }
  
    .md\:hover\:border-pink-lightest:hover {
      border-color: #ffebef;
    }
  
    .md\:rounded-none {
      border-radius: 0;
    }
  
    .md\:rounded-sm {
      border-radius: .125rem;
    }
  
    .md\:rounded {
      border-radius: .25rem;
    }
  
    .md\:rounded-lg {
      border-radius: .5rem;
    }
  
    .md\:rounded-full {
      border-radius: 9999px;
    }
  
    .md\:rounded-t-none {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  
    .md\:rounded-r-none {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }
  
    .md\:rounded-b-none {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
  
    .md\:rounded-l-none {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }
  
    .md\:rounded-t-sm {
      border-top-left-radius: .125rem;
      border-top-right-radius: .125rem;
    }
  
    .md\:rounded-r-sm {
      border-top-right-radius: .125rem;
      border-bottom-right-radius: .125rem;
    }
  
    .md\:rounded-b-sm {
      border-bottom-right-radius: .125rem;
      border-bottom-left-radius: .125rem;
    }
  
    .md\:rounded-l-sm {
      border-top-left-radius: .125rem;
      border-bottom-left-radius: .125rem;
    }
  
    .md\:rounded-t {
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem;
    }
  
    .md\:rounded-r {
      border-top-right-radius: .25rem;
      border-bottom-right-radius: .25rem;
    }
  
    .md\:rounded-b {
      border-bottom-right-radius: .25rem;
      border-bottom-left-radius: .25rem;
    }
  
    .md\:rounded-l {
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem;
    }
  
    .md\:rounded-t-lg {
      border-top-left-radius: .5rem;
      border-top-right-radius: .5rem;
    }
  
    .md\:rounded-r-lg {
      border-top-right-radius: .5rem;
      border-bottom-right-radius: .5rem;
    }
  
    .md\:rounded-b-lg {
      border-bottom-right-radius: .5rem;
      border-bottom-left-radius: .5rem;
    }
  
    .md\:rounded-l-lg {
      border-top-left-radius: .5rem;
      border-bottom-left-radius: .5rem;
    }
  
    .md\:rounded-t-full {
      border-top-left-radius: 9999px;
      border-top-right-radius: 9999px;
    }
  
    .md\:rounded-r-full {
      border-top-right-radius: 9999px;
      border-bottom-right-radius: 9999px;
    }
  
    .md\:rounded-b-full {
      border-bottom-right-radius: 9999px;
      border-bottom-left-radius: 9999px;
    }
  
    .md\:rounded-l-full {
      border-top-left-radius: 9999px;
      border-bottom-left-radius: 9999px;
    }
  
    .md\:rounded-tl-none {
      border-top-left-radius: 0;
    }
  
    .md\:rounded-tr-none {
      border-top-right-radius: 0;
    }
  
    .md\:rounded-br-none {
      border-bottom-right-radius: 0;
    }
  
    .md\:rounded-bl-none {
      border-bottom-left-radius: 0;
    }
  
    .md\:rounded-tl-sm {
      border-top-left-radius: .125rem;
    }
  
    .md\:rounded-tr-sm {
      border-top-right-radius: .125rem;
    }
  
    .md\:rounded-br-sm {
      border-bottom-right-radius: .125rem;
    }
  
    .md\:rounded-bl-sm {
      border-bottom-left-radius: .125rem;
    }
  
    .md\:rounded-tl {
      border-top-left-radius: .25rem;
    }
  
    .md\:rounded-tr {
      border-top-right-radius: .25rem;
    }
  
    .md\:rounded-br {
      border-bottom-right-radius: .25rem;
    }
  
    .md\:rounded-bl {
      border-bottom-left-radius: .25rem;
    }
  
    .md\:rounded-tl-lg {
      border-top-left-radius: .5rem;
    }
  
    .md\:rounded-tr-lg {
      border-top-right-radius: .5rem;
    }
  
    .md\:rounded-br-lg {
      border-bottom-right-radius: .5rem;
    }
  
    .md\:rounded-bl-lg {
      border-bottom-left-radius: .5rem;
    }
  
    .md\:rounded-tl-full {
      border-top-left-radius: 9999px;
    }
  
    .md\:rounded-tr-full {
      border-top-right-radius: 9999px;
    }
  
    .md\:rounded-br-full {
      border-bottom-right-radius: 9999px;
    }
  
    .md\:rounded-bl-full {
      border-bottom-left-radius: 9999px;
    }
  
    .md\:border-solid {
      border-style: solid;
    }
  
    .md\:border-dashed {
      border-style: dashed;
    }
  
    .md\:border-dotted {
      border-style: dotted;
    }
  
    .md\:border-none {
      border-style: none;
    }
  
    .md\:border-0 {
      border-width: 0;
    }
  
    .md\:border-2 {
      border-width: 2px;
    }
  
    .md\:border-4 {
      border-width: 4px;
    }
  
    .md\:border-8 {
      border-width: 8px;
    }
  
    .md\:border {
      border-width: 1px;
    }
  
    .md\:border-t-0 {
      border-top-width: 0;
    }
  
    .md\:border-r-0 {
      border-right-width: 0;
    }
  
    .md\:border-b-0 {
      border-bottom-width: 0;
    }
  
    .md\:border-l-0 {
      border-left-width: 0;
    }
  
    .md\:border-t-2 {
      border-top-width: 2px;
    }
  
    .md\:border-r-2 {
      border-right-width: 2px;
    }
  
    .md\:border-b-2 {
      border-bottom-width: 2px;
    }
  
    .md\:border-l-2 {
      border-left-width: 2px;
    }
  
    .md\:border-t-4 {
      border-top-width: 4px;
    }
  
    .md\:border-r-4 {
      border-right-width: 4px;
    }
  
    .md\:border-b-4 {
      border-bottom-width: 4px;
    }
  
    .md\:border-l-4 {
      border-left-width: 4px;
    }
  
    .md\:border-t-8 {
      border-top-width: 8px;
    }
  
    .md\:border-r-8 {
      border-right-width: 8px;
    }
  
    .md\:border-b-8 {
      border-bottom-width: 8px;
    }
  
    .md\:border-l-8 {
      border-left-width: 8px;
    }
  
    .md\:border-t {
      border-top-width: 1px;
    }
  
    .md\:border-r {
      border-right-width: 1px;
    }
  
    .md\:border-b {
      border-bottom-width: 1px;
    }
  
    .md\:border-l {
      border-left-width: 1px;
    }
  
    .md\:cursor-auto {
      cursor: auto;
    }
  
    .md\:cursor-default {
      cursor: default;
    }
  
    .md\:cursor-pointer {
      cursor: pointer;
    }
  
    .md\:cursor-not-allowed {
      cursor: not-allowed;
    }
  
    .md\:block {
      display: block;
    }
  
    .md\:inline-block {
      display: inline-block;
    }
  
    .md\:inline {
      display: inline;
    }
  
    .md\:table {
      display: table;
    }
  
    .md\:table-row {
      display: table-row;
    }
  
    .md\:table-cell {
      display: table-cell;
    }
  
    .md\:hidden {
      display: none;
    }
  
    .md\:flex {
      display: flex;
    }
  
    .md\:inline-flex {
      display: inline-flex;
    }
  
    .md\:flex-row {
      flex-direction: row;
    }
  
    .md\:flex-row-reverse {
      flex-direction: row-reverse;
    }
  
    .md\:flex-col {
      flex-direction: column;
    }
  
    .md\:flex-col-reverse {
      flex-direction: column-reverse;
    }
  
    .md\:flex-wrap {
      flex-wrap: wrap;
    }
  
    .md\:flex-wrap-reverse {
      flex-wrap: wrap-reverse;
    }
  
    .md\:flex-no-wrap {
      flex-wrap: nowrap;
    }
  
    .md\:items-start {
      align-items: flex-start;
    }
  
    .md\:items-end {
      align-items: flex-end;
    }
  
    .md\:items-center {
      align-items: center;
    }
  
    .md\:items-baseline {
      align-items: baseline;
    }
  
    .md\:items-stretch {
      align-items: stretch;
    }
  
    .md\:self-auto {
      align-self: auto;
    }
  
    .md\:self-start {
      align-self: flex-start;
    }
  
    .md\:self-end {
      align-self: flex-end;
    }
  
    .md\:self-center {
      align-self: center;
    }
  
    .md\:self-stretch {
      align-self: stretch;
    }
  
    .md\:justify-start {
      justify-content: flex-start;
    }
  
    .md\:justify-end {
      justify-content: flex-end;
    }
  
    .md\:justify-center {
      justify-content: center;
    }
  
    .md\:justify-between {
      justify-content: space-between;
    }
  
    .md\:justify-around {
      justify-content: space-around;
    }
  
    .md\:content-center {
      align-content: center;
    }
  
    .md\:content-start {
      align-content: flex-start;
    }
  
    .md\:content-end {
      align-content: flex-end;
    }
  
    .md\:content-between {
      align-content: space-between;
    }
  
    .md\:content-around {
      align-content: space-around;
    }
  
    .md\:flex-1 {
      flex: 1;
    }
  
    .md\:flex-auto {
      flex: auto;
    }
  
    .md\:flex-initial {
      flex: initial;
    }
  
    .md\:flex-none {
      flex: none;
    }
  
    .md\:flex-grow {
      flex-grow: 1;
    }
  
    .md\:flex-shrink {
      flex-shrink: 1;
    }
  
    .md\:flex-no-grow {
      flex-grow: 0;
    }
  
    .md\:flex-no-shrink {
      flex-shrink: 0;
    }
  
    .md\:float-right {
      float: right;
    }
  
    .md\:float-left {
      float: left;
    }
  
    .md\:float-none {
      float: none;
    }
  
    .md\:clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
  
    .md\:font-sans {
      font-family: system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
    }
  
    .md\:font-serif {
      font-family: Constantia, Lucida Bright, Lucidabright, Lucida Serif, Lucida, DejaVu Serif, Bitstream Vera Serif, Liberation Serif, Georgia, serif;
    }
  
    .md\:font-mono {
      font-family: Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
    }
  
    .md\:font-hairline {
      font-weight: 100;
    }
  
    .md\:font-thin {
      font-weight: 200;
    }
  
    .md\:font-light {
      font-weight: 300;
    }
  
    .md\:font-normal {
      font-weight: 400;
    }
  
    .md\:font-medium {
      font-weight: 500;
    }
  
    .md\:font-semibold {
      font-weight: 600;
    }
  
    .md\:font-bold {
      font-weight: 700;
    }
  
    .md\:font-extrabold {
      font-weight: 800;
    }
  
    .md\:font-black {
      font-weight: 900;
    }
  
    .md\:hover\:font-hairline:hover {
      font-weight: 100;
    }
  
    .md\:hover\:font-thin:hover {
      font-weight: 200;
    }
  
    .md\:hover\:font-light:hover {
      font-weight: 300;
    }
  
    .md\:hover\:font-normal:hover {
      font-weight: 400;
    }
  
    .md\:hover\:font-medium:hover {
      font-weight: 500;
    }
  
    .md\:hover\:font-semibold:hover {
      font-weight: 600;
    }
  
    .md\:hover\:font-bold:hover {
      font-weight: 700;
    }
  
    .md\:hover\:font-extrabold:hover {
      font-weight: 800;
    }
  
    .md\:hover\:font-black:hover {
      font-weight: 900;
    }
  
    .md\:h-1 {
      height: .25rem;
    }
  
    .md\:h-2 {
      height: .5rem;
    }
  
    .md\:h-3 {
      height: .75rem;
    }
  
    .md\:h-4 {
      height: 1rem;
    }
  
    .md\:h-6 {
      height: 1.5rem;
    }
  
    .md\:h-8 {
      height: 2rem;
    }
  
    .md\:h-10 {
      height: 2.5rem;
    }
  
    .md\:h-12 {
      height: 3rem;
    }
  
    .md\:h-16 {
      height: 4rem;
    }
  
    .md\:h-24 {
      height: 6rem;
    }
  
    .md\:h-32 {
      height: 8rem;
    }
  
    .md\:h-48 {
      height: 12rem;
    }
  
    .md\:h-64 {
      height: 16rem;
    }
  
    .md\:h-auto {
      height: auto;
    }
  
    .md\:h-px {
      height: 1px;
    }
  
    .md\:h-full {
      height: 100%;
    }
  
    .md\:h-screen {
      height: 100vh;
    }
  
    .md\:leading-none {
      line-height: 1;
    }
  
    .md\:leading-tight {
      line-height: 1.25;
    }
  
    .md\:leading-normal {
      line-height: 1.5;
    }
  
    .md\:leading-loose {
      line-height: 2;
    }
  
    .md\:m-0 {
      margin: 0;
    }
  
    .md\:m-1 {
      margin: .25rem;
    }
  
    .md\:m-2 {
      margin: .5rem;
    }
  
    .md\:m-3 {
      margin: .75rem;
    }
  
    .md\:m-4 {
      margin: 1rem;
    }
  
    .md\:m-6 {
      margin: 1.5rem;
    }
  
    .md\:m-8 {
      margin: 2rem;
    }
  
    .md\:m-auto {
      margin: auto;
    }
  
    .md\:m-px {
      margin: 1px;
    }
  
    .md\:my-0 {
      margin-top: 0;
      margin-bottom: 0;
    }
  
    .md\:mx-0 {
      margin-left: 0;
      margin-right: 0;
    }
  
    .md\:my-1 {
      margin-top: .25rem;
      margin-bottom: .25rem;
    }
  
    .md\:mx-1 {
      margin-left: .25rem;
      margin-right: .25rem;
    }
  
    .md\:my-2 {
      margin-top: .5rem;
      margin-bottom: .5rem;
    }
  
    .md\:mx-2 {
      margin-left: .5rem;
      margin-right: .5rem;
    }
  
    .md\:my-3 {
      margin-top: .75rem;
      margin-bottom: .75rem;
    }
  
    .md\:mx-3 {
      margin-left: .75rem;
      margin-right: .75rem;
    }
  
    .md\:my-4 {
      margin-top: 1rem;
      margin-bottom: 1rem;
    }
  
    .md\:mx-4 {
      margin-left: 1rem;
      margin-right: 1rem;
    }
  
    .md\:my-6 {
      margin-top: 1.5rem;
      margin-bottom: 1.5rem;
    }
  
    .md\:mx-6 {
      margin-left: 1.5rem;
      margin-right: 1.5rem;
    }
  
    .md\:my-8 {
      margin-top: 2rem;
      margin-bottom: 2rem;
    }
  
    .md\:mx-8 {
      margin-left: 2rem;
      margin-right: 2rem;
    }
  
    .md\:my-auto {
      margin-top: auto;
      margin-bottom: auto;
    }
  
    .md\:mx-auto {
      margin-left: auto;
      margin-right: auto;
    }
  
    .md\:my-px {
      margin-top: 1px;
      margin-bottom: 1px;
    }
  
    .md\:mx-px {
      margin-left: 1px;
      margin-right: 1px;
    }
  
    .md\:mt-0 {
      margin-top: 0;
    }
  
    .md\:mr-0 {
      margin-right: 0;
    }
  
    .md\:mb-0 {
      margin-bottom: 0;
    }
  
    .md\:ml-0 {
      margin-left: 0;
    }
  
    .md\:mt-1 {
      margin-top: .25rem;
    }
  
    .md\:mr-1 {
      margin-right: .25rem;
    }
  
    .md\:mb-1 {
      margin-bottom: .25rem;
    }
  
    .md\:ml-1 {
      margin-left: .25rem;
    }
  
    .md\:mt-2 {
      margin-top: .5rem;
    }
  
    .md\:mr-2 {
      margin-right: .5rem;
    }
  
    .md\:mb-2 {
      margin-bottom: .5rem;
    }
  
    .md\:ml-2 {
      margin-left: .5rem;
    }
  
    .md\:mt-3 {
      margin-top: .75rem;
    }
  
    .md\:mr-3 {
      margin-right: .75rem;
    }
  
    .md\:mb-3 {
      margin-bottom: .75rem;
    }
  
    .md\:ml-3 {
      margin-left: .75rem;
    }
  
    .md\:mt-4 {
      margin-top: 1rem;
    }
  
    .md\:mr-4 {
      margin-right: 1rem;
    }
  
    .md\:mb-4 {
      margin-bottom: 1rem;
    }
  
    .md\:ml-4 {
      margin-left: 1rem;
    }
  
    .md\:mt-6 {
      margin-top: 1.5rem;
    }
  
    .md\:mr-6 {
      margin-right: 1.5rem;
    }
  
    .md\:mb-6 {
      margin-bottom: 1.5rem;
    }
  
    .md\:ml-6 {
      margin-left: 1.5rem;
    }
  
    .md\:mt-8 {
      margin-top: 2rem;
    }
  
    .md\:mr-8 {
      margin-right: 2rem;
    }
  
    .md\:mb-8 {
      margin-bottom: 2rem;
    }
  
    .md\:ml-8 {
      margin-left: 2rem;
    }
  
    .md\:mt-auto {
      margin-top: auto;
    }
  
    .md\:mr-auto {
      margin-right: auto;
    }
  
    .md\:mb-auto {
      margin-bottom: auto;
    }
  
    .md\:ml-auto {
      margin-left: auto;
    }
  
    .md\:mt-px {
      margin-top: 1px;
    }
  
    .md\:mr-px {
      margin-right: 1px;
    }
  
    .md\:mb-px {
      margin-bottom: 1px;
    }
  
    .md\:ml-px {
      margin-left: 1px;
    }
  
    .md\:max-h-full {
      max-height: 100%;
    }
  
    .md\:max-h-screen {
      max-height: 100vh;
    }
  
    .md\:max-w-xs {
      max-width: 20rem;
    }
  
    .md\:max-w-sm {
      max-width: 30rem;
    }
  
    .md\:max-w-md {
      max-width: 40rem;
    }
  
    .md\:max-w-lg {
      max-width: 50rem;
    }
  
    .md\:max-w-xl {
      max-width: 60rem;
    }
  
    .md\:max-w-2xl {
      max-width: 70rem;
    }
  
    .md\:max-w-3xl {
      max-width: 80rem;
    }
  
    .md\:max-w-4xl {
      max-width: 90rem;
    }
  
    .md\:max-w-5xl {
      max-width: 100rem;
    }
  
    .md\:max-w-full {
      max-width: 100%;
    }
  
    .md\:min-h-0 {
      min-height: 0;
    }
  
    .md\:min-h-full {
      min-height: 100%;
    }
  
    .md\:min-h-screen {
      min-height: 100vh;
    }
  
    .md\:min-w-0 {
      min-width: 0;
    }
  
    .md\:min-w-full {
      min-width: 100%;
    }
  
    .md\:-m-0 {
      margin: 0;
    }
  
    .md\:-m-1 {
      margin: -0.25rem;
    }
  
    .md\:-m-2 {
      margin: -0.5rem;
    }
  
    .md\:-m-3 {
      margin: -0.75rem;
    }
  
    .md\:-m-4 {
      margin: -1rem;
    }
  
    .md\:-m-6 {
      margin: -1.5rem;
    }
  
    .md\:-m-8 {
      margin: -2rem;
    }
  
    .md\:-m-px {
      margin: -1px;
    }
  
    .md\:-my-0 {
      margin-top: 0;
      margin-bottom: 0;
    }
  
    .md\:-mx-0 {
      margin-left: 0;
      margin-right: 0;
    }
  
    .md\:-my-1 {
      margin-top: -0.25rem;
      margin-bottom: -0.25rem;
    }
  
    .md\:-mx-1 {
      margin-left: -0.25rem;
      margin-right: -0.25rem;
    }
  
    .md\:-my-2 {
      margin-top: -0.5rem;
      margin-bottom: -0.5rem;
    }
  
    .md\:-mx-2 {
      margin-left: -0.5rem;
      margin-right: -0.5rem;
    }
  
    .md\:-my-3 {
      margin-top: -0.75rem;
      margin-bottom: -0.75rem;
    }
  
    .md\:-mx-3 {
      margin-left: -0.75rem;
      margin-right: -0.75rem;
    }
  
    .md\:-my-4 {
      margin-top: -1rem;
      margin-bottom: -1rem;
    }
  
    .md\:-mx-4 {
      margin-left: -1rem;
      margin-right: -1rem;
    }
  
    .md\:-my-6 {
      margin-top: -1.5rem;
      margin-bottom: -1.5rem;
    }
  
    .md\:-mx-6 {
      margin-left: -1.5rem;
      margin-right: -1.5rem;
    }
  
    .md\:-my-8 {
      margin-top: -2rem;
      margin-bottom: -2rem;
    }
  
    .md\:-mx-8 {
      margin-left: -2rem;
      margin-right: -2rem;
    }
  
    .md\:-my-px {
      margin-top: -1px;
      margin-bottom: -1px;
    }
  
    .md\:-mx-px {
      margin-left: -1px;
      margin-right: -1px;
    }
  
    .md\:-mt-0 {
      margin-top: 0;
    }
  
    .md\:-mr-0 {
      margin-right: 0;
    }
  
    .md\:-mb-0 {
      margin-bottom: 0;
    }
  
    .md\:-ml-0 {
      margin-left: 0;
    }
  
    .md\:-mt-1 {
      margin-top: -0.25rem;
    }
  
    .md\:-mr-1 {
      margin-right: -0.25rem;
    }
  
    .md\:-mb-1 {
      margin-bottom: -0.25rem;
    }
  
    .md\:-ml-1 {
      margin-left: -0.25rem;
    }
  
    .md\:-mt-2 {
      margin-top: -0.5rem;
    }
  
    .md\:-mr-2 {
      margin-right: -0.5rem;
    }
  
    .md\:-mb-2 {
      margin-bottom: -0.5rem;
    }
  
    .md\:-ml-2 {
      margin-left: -0.5rem;
    }
  
    .md\:-mt-3 {
      margin-top: -0.75rem;
    }
  
    .md\:-mr-3 {
      margin-right: -0.75rem;
    }
  
    .md\:-mb-3 {
      margin-bottom: -0.75rem;
    }
  
    .md\:-ml-3 {
      margin-left: -0.75rem;
    }
  
    .md\:-mt-4 {
      margin-top: -1rem;
    }
  
    .md\:-mr-4 {
      margin-right: -1rem;
    }
  
    .md\:-mb-4 {
      margin-bottom: -1rem;
    }
  
    .md\:-ml-4 {
      margin-left: -1rem;
    }
  
    .md\:-mt-6 {
      margin-top: -1.5rem;
    }
  
    .md\:-mr-6 {
      margin-right: -1.5rem;
    }
  
    .md\:-mb-6 {
      margin-bottom: -1.5rem;
    }
  
    .md\:-ml-6 {
      margin-left: -1.5rem;
    }
  
    .md\:-mt-8 {
      margin-top: -2rem;
    }
  
    .md\:-mr-8 {
      margin-right: -2rem;
    }
  
    .md\:-mb-8 {
      margin-bottom: -2rem;
    }
  
    .md\:-ml-8 {
      margin-left: -2rem;
    }
  
    .md\:-mt-px {
      margin-top: -1px;
    }
  
    .md\:-mr-px {
      margin-right: -1px;
    }
  
    .md\:-mb-px {
      margin-bottom: -1px;
    }
  
    .md\:-ml-px {
      margin-left: -1px;
    }
  
    .md\:opacity-0 {
      opacity: 0;
    }
  
    .md\:opacity-25 {
      opacity: .25;
    }
  
    .md\:opacity-50 {
      opacity: .5;
    }
  
    .md\:opacity-75 {
      opacity: .75;
    }
  
    .md\:opacity-100 {
      opacity: 1;
    }
  
    .md\:overflow-auto {
      overflow: auto;
    }
  
    .md\:overflow-hidden {
      overflow: hidden;
    }
  
    .md\:overflow-visible {
      overflow: visible;
    }
  
    .md\:overflow-scroll {
      overflow: scroll;
    }
  
    .md\:overflow-x-scroll {
      overflow-x: auto;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
  
    .md\:overflow-y-scroll {
      overflow-y: auto;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
  
    .md\:scrolling-touch {
      -webkit-overflow-scrolling: touch;
    }
  
    .md\:scrolling-auto {
      -webkit-overflow-scrolling: auto;
    }
  
    .md\:p-0 {
      padding: 0;
    }
  
    .md\:p-1 {
      padding: .25rem;
    }
  
    .md\:p-2 {
      padding: .5rem;
    }
  
    .md\:p-3 {
      padding: .75rem;
    }
  
    .md\:p-4 {
      padding: 1rem;
    }
  
    .md\:p-6 {
      padding: 1.5rem;
    }
  
    .md\:p-8 {
      padding: 2rem;
    }
  
    .md\:p-px {
      padding: 1px;
    }
  
    .md\:py-0 {
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .md\:px-0 {
      padding-left: 0;
      padding-right: 0;
    }
  
    .md\:py-1 {
      padding-top: .25rem;
      padding-bottom: .25rem;
    }
  
    .md\:px-1 {
      padding-left: .25rem;
      padding-right: .25rem;
    }
  
    .md\:py-2 {
      padding-top: .5rem;
      padding-bottom: .5rem;
    }
  
    .md\:px-2 {
      padding-left: .5rem;
      padding-right: .5rem;
    }
  
    .md\:py-3 {
      padding-top: .75rem;
      padding-bottom: .75rem;
    }
  
    .md\:px-3 {
      padding-left: .75rem;
      padding-right: .75rem;
    }
  
    .md\:py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
  
    .md\:px-4 {
      padding-left: 1rem;
      padding-right: 1rem;
    }
  
    .md\:py-6 {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }
  
    .md\:px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }
  
    .md\:py-8 {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }
  
    .md\:px-8 {
      padding-left: 2rem;
      padding-right: 2rem;
    }
  
    .md\:py-px {
      padding-top: 1px;
      padding-bottom: 1px;
    }
  
    .md\:px-px {
      padding-left: 1px;
      padding-right: 1px;
    }
  
    .md\:pt-0 {
      padding-top: 0;
    }
  
    .md\:pr-0 {
      padding-right: 0;
    }
  
    .md\:pb-0 {
      padding-bottom: 0;
    }
  
    .md\:pl-0 {
      padding-left: 0;
    }
  
    .md\:pt-1 {
      padding-top: .25rem;
    }
  
    .md\:pr-1 {
      padding-right: .25rem;
    }
  
    .md\:pb-1 {
      padding-bottom: .25rem;
    }
  
    .md\:pl-1 {
      padding-left: .25rem;
    }
  
    .md\:pt-2 {
      padding-top: .5rem;
    }
  
    .md\:pr-2 {
      padding-right: .5rem;
    }
  
    .md\:pb-2 {
      padding-bottom: .5rem;
    }
  
    .md\:pl-2 {
      padding-left: .5rem;
    }
  
    .md\:pt-3 {
      padding-top: .75rem;
    }
  
    .md\:pr-3 {
      padding-right: .75rem;
    }
  
    .md\:pb-3 {
      padding-bottom: .75rem;
    }
  
    .md\:pl-3 {
      padding-left: .75rem;
    }
  
    .md\:pt-4 {
      padding-top: 1rem;
    }
  
    .md\:pr-4 {
      padding-right: 1rem;
    }
  
    .md\:pb-4 {
      padding-bottom: 1rem;
    }
  
    .md\:pl-4 {
      padding-left: 1rem;
    }
  
    .md\:pt-6 {
      padding-top: 1.5rem;
    }
  
    .md\:pr-6 {
      padding-right: 1.5rem;
    }
  
    .md\:pb-6 {
      padding-bottom: 1.5rem;
    }
  
    .md\:pl-6 {
      padding-left: 1.5rem;
    }
  
    .md\:pt-8 {
      padding-top: 2rem;
    }
  
    .md\:pr-8 {
      padding-right: 2rem;
    }
  
    .md\:pb-8 {
      padding-bottom: 2rem;
    }
  
    .md\:pl-8 {
      padding-left: 2rem;
    }
  
    .md\:pt-px {
      padding-top: 1px;
    }
  
    .md\:pr-px {
      padding-right: 1px;
    }
  
    .md\:pb-px {
      padding-bottom: 1px;
    }
  
    .md\:pl-px {
      padding-left: 1px;
    }
  
    .md\:pointer-events-none {
      pointer-events: none;
    }
  
    .md\:pointer-events-auto {
      pointer-events: auto;
    }
  
    .md\:static {
      position: static;
    }
  
    .md\:fixed {
      position: fixed;
    }
  
    .md\:absolute {
      position: absolute;
    }
  
    .md\:relative {
      position: relative;
    }
  
    .md\:pin-none {
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
    }
  
    .md\:pin {
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
    }
  
    .md\:pin-y {
      top: 0;
      bottom: 0;
    }
  
    .md\:pin-x {
      right: 0;
      left: 0;
    }
  
    .md\:pin-t {
      top: 0;
    }
  
    .md\:pin-r {
      right: 0;
    }
  
    .md\:pin-b {
      bottom: 0;
    }
  
    .md\:pin-l {
      left: 0;
    }
  
    .md\:resize-none {
      resize: none;
    }
  
    .md\:resize-y {
      resize: vertical;
    }
  
    .md\:resize-x {
      resize: horizontal;
    }
  
    .md\:resize {
      resize: both;
    }
  
    .md\:shadow {
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
    }
  
    .md\:shadow-md {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08);
    }
  
    .md\:shadow-lg {
      box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
    }
  
    .md\:shadow-inner {
      box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, .06);
    }
  
    .md\:shadow-none {
      box-shadow: none;
    }
  
    .md\:text-left {
      text-align: left;
    }
  
    .md\:text-center {
      text-align: center;
    }
  
    .md\:text-right {
      text-align: right;
    }
  
    .md\:text-justify {
      text-align: justify;
    }
  
    .md\:text-transparent {
      color: transparent;
    }
  
    .md\:text-black {
      color: #22292f;
    }
  
    .md\:text-grey-darkest {
      color: #3d4852;
    }
  
    .md\:text-grey-darker {
      color: #606f7b;
    }
  
    .md\:text-grey-dark {
      color: #8795a1;
    }
  
    .md\:text-grey {
      color: #b8c2cc;
    }
  
    .md\:text-grey-light {
      color: #dae1e7;
    }
  
    .md\:text-grey-lighter {
      color: #f1f5f8;
    }
  
    .md\:text-grey-lightest {
      color: #f8fafc;
    }
  
    .md\:text-white {
      color: #fff;
    }
  
    .md\:text-red-darkest {
      color: #3b0d0c;
    }
  
    .md\:text-red-darker {
      color: #621b18;
    }
  
    .md\:text-red-dark {
      color: #cc1f1a;
    }
  
    .md\:text-red {
      color: #e3342f;
    }
  
    .md\:text-red-light {
      color: #ef5753;
    }
  
    .md\:text-red-lighter {
      color: #f9acaa;
    }
  
    .md\:text-red-lightest {
      color: #fcebea;
    }
  
    .md\:text-orange-darkest {
      color: #462a16;
    }
  
    .md\:text-orange-darker {
      color: #613b1f;
    }
  
    .md\:text-orange-dark {
      color: #de751f;
    }
  
    .md\:text-orange {
      color: #f6993f;
    }
  
    .md\:text-orange-light {
      color: #faad63;
    }
  
    .md\:text-orange-lighter {
      color: #fcd9b6;
    }
  
    .md\:text-orange-lightest {
      color: #fff5eb;
    }
  
    .md\:text-yellow-darkest {
      color: #453411;
    }
  
    .md\:text-yellow-darker {
      color: #684f1d;
    }
  
    .md\:text-yellow-dark {
      color: #f2d024;
    }
  
    .md\:text-yellow {
      color: #ffed4a;
    }
  
    .md\:text-yellow-light {
      color: #fff382;
    }
  
    .md\:text-yellow-lighter {
      color: #fff9c2;
    }
  
    .md\:text-yellow-lightest {
      color: #fcfbeb;
    }
  
    .md\:text-green-darkest {
      color: #0f2f21;
    }
  
    .md\:text-green-darker {
      color: #1a4731;
    }
  
    .md\:text-green-dark {
      color: #1f9d55;
    }
  
    .md\:text-green {
      color: #38c172;
    }
  
    .md\:text-green-light {
      color: #51d88a;
    }
  
    .md\:text-green-lighter {
      color: #a2f5bf;
    }
  
    .md\:text-green-lightest {
      color: #e3fcec;
    }
  
    .md\:text-teal-darkest {
      color: #0d3331;
    }
  
    .md\:text-teal-darker {
      color: #20504f;
    }
  
    .md\:text-teal-dark {
      color: #38a89d;
    }
  
    .md\:text-teal {
      color: #4dc0b5;
    }
  
    .md\:text-teal-light {
      color: #64d5ca;
    }
  
    .md\:text-teal-lighter {
      color: #a0f0ed;
    }
  
    .md\:text-teal-lightest {
      color: #e8fffe;
    }
  
    .md\:text-blue-darkest {
      color: #12283a;
    }
  
    .md\:text-blue-darker {
      color: #1c3d5a;
    }
  
    .md\:text-blue-dark {
      color: #2779bd;
    }
  
    .md\:text-blue {
      color: #3490dc;
    }
  
    .md\:text-blue-light {
      color: #6cb2eb;
    }
  
    .md\:text-blue-lighter {
      color: #bcdefa;
    }
  
    .md\:text-blue-lightest {
      color: #eff8ff;
    }
  
    .md\:text-indigo-darkest {
      color: #191e38;
    }
  
    .md\:text-indigo-darker {
      color: #2f365f;
    }
  
    .md\:text-indigo-dark {
      color: #5661b3;
    }
  
    .md\:text-indigo {
      color: #6574cd;
    }
  
    .md\:text-indigo-light {
      color: #7886d7;
    }
  
    .md\:text-indigo-lighter {
      color: #b2b7ff;
    }
  
    .md\:text-indigo-lightest {
      color: #e6e8ff;
    }
  
    .md\:text-purple-darkest {
      color: #21183c;
    }
  
    .md\:text-purple-darker {
      color: #382b5f;
    }
  
    .md\:text-purple-dark {
      color: #794acf;
    }
  
    .md\:text-purple {
      color: #9561e2;
    }
  
    .md\:text-purple-light {
      color: #a779e9;
    }
  
    .md\:text-purple-lighter {
      color: #d6bbfc;
    }
  
    .md\:text-purple-lightest {
      color: #f3ebff;
    }
  
    .md\:text-pink-darkest {
      color: #451225;
    }
  
    .md\:text-pink-darker {
      color: #6f213f;
    }
  
    .md\:text-pink-dark {
      color: #eb5286;
    }
  
    .md\:text-pink {
      color: #f66d9b;
    }
  
    .md\:text-pink-light {
      color: #fa7ea8;
    }
  
    .md\:text-pink-lighter {
      color: #ffbbca;
    }
  
    .md\:text-pink-lightest {
      color: #ffebef;
    }
  
    .md\:hover\:text-transparent:hover {
      color: transparent;
    }
  
    .md\:hover\:text-black:hover {
      color: #22292f;
    }
  
    .md\:hover\:text-grey-darkest:hover {
      color: #3d4852;
    }
  
    .md\:hover\:text-grey-darker:hover {
      color: #606f7b;
    }
  
    .md\:hover\:text-grey-dark:hover {
      color: #8795a1;
    }
  
    .md\:hover\:text-grey:hover {
      color: #b8c2cc;
    }
  
    .md\:hover\:text-grey-light:hover {
      color: #dae1e7;
    }
  
    .md\:hover\:text-grey-lighter:hover {
      color: #f1f5f8;
    }
  
    .md\:hover\:text-grey-lightest:hover {
      color: #f8fafc;
    }
  
    .md\:hover\:text-white:hover {
      color: #fff;
    }
  
    .md\:hover\:text-red-darkest:hover {
      color: #3b0d0c;
    }
  
    .md\:hover\:text-red-darker:hover {
      color: #621b18;
    }
  
    .md\:hover\:text-red-dark:hover {
      color: #cc1f1a;
    }
  
    .md\:hover\:text-red:hover {
      color: #e3342f;
    }
  
    .md\:hover\:text-red-light:hover {
      color: #ef5753;
    }
  
    .md\:hover\:text-red-lighter:hover {
      color: #f9acaa;
    }
  
    .md\:hover\:text-red-lightest:hover {
      color: #fcebea;
    }
  
    .md\:hover\:text-orange-darkest:hover {
      color: #462a16;
    }
  
    .md\:hover\:text-orange-darker:hover {
      color: #613b1f;
    }
  
    .md\:hover\:text-orange-dark:hover {
      color: #de751f;
    }
  
    .md\:hover\:text-orange:hover {
      color: #f6993f;
    }
  
    .md\:hover\:text-orange-light:hover {
      color: #faad63;
    }
  
    .md\:hover\:text-orange-lighter:hover {
      color: #fcd9b6;
    }
  
    .md\:hover\:text-orange-lightest:hover {
      color: #fff5eb;
    }
  
    .md\:hover\:text-yellow-darkest:hover {
      color: #453411;
    }
  
    .md\:hover\:text-yellow-darker:hover {
      color: #684f1d;
    }
  
    .md\:hover\:text-yellow-dark:hover {
      color: #f2d024;
    }
  
    .md\:hover\:text-yellow:hover {
      color: #ffed4a;
    }
  
    .md\:hover\:text-yellow-light:hover {
      color: #fff382;
    }
  
    .md\:hover\:text-yellow-lighter:hover {
      color: #fff9c2;
    }
  
    .md\:hover\:text-yellow-lightest:hover {
      color: #fcfbeb;
    }
  
    .md\:hover\:text-green-darkest:hover {
      color: #0f2f21;
    }
  
    .md\:hover\:text-green-darker:hover {
      color: #1a4731;
    }
  
    .md\:hover\:text-green-dark:hover {
      color: #1f9d55;
    }
  
    .md\:hover\:text-green:hover {
      color: #38c172;
    }
  
    .md\:hover\:text-green-light:hover {
      color: #51d88a;
    }
  
    .md\:hover\:text-green-lighter:hover {
      color: #a2f5bf;
    }
  
    .md\:hover\:text-green-lightest:hover {
      color: #e3fcec;
    }
  
    .md\:hover\:text-teal-darkest:hover {
      color: #0d3331;
    }
  
    .md\:hover\:text-teal-darker:hover {
      color: #20504f;
    }
  
    .md\:hover\:text-teal-dark:hover {
      color: #38a89d;
    }
  
    .md\:hover\:text-teal:hover {
      color: #4dc0b5;
    }
  
    .md\:hover\:text-teal-light:hover {
      color: #64d5ca;
    }
  
    .md\:hover\:text-teal-lighter:hover {
      color: #a0f0ed;
    }
  
    .md\:hover\:text-teal-lightest:hover {
      color: #e8fffe;
    }
  
    .md\:hover\:text-blue-darkest:hover {
      color: #12283a;
    }
  
    .md\:hover\:text-blue-darker:hover {
      color: #1c3d5a;
    }
  
    .md\:hover\:text-blue-dark:hover {
      color: #2779bd;
    }
  
    .md\:hover\:text-blue:hover {
      color: #3490dc;
    }
  
    .md\:hover\:text-blue-light:hover {
      color: #6cb2eb;
    }
  
    .md\:hover\:text-blue-lighter:hover {
      color: #bcdefa;
    }
  
    .md\:hover\:text-blue-lightest:hover {
      color: #eff8ff;
    }
  
    .md\:hover\:text-indigo-darkest:hover {
      color: #191e38;
    }
  
    .md\:hover\:text-indigo-darker:hover {
      color: #2f365f;
    }
  
    .md\:hover\:text-indigo-dark:hover {
      color: #5661b3;
    }
  
    .md\:hover\:text-indigo:hover {
      color: #6574cd;
    }
  
    .md\:hover\:text-indigo-light:hover {
      color: #7886d7;
    }
  
    .md\:hover\:text-indigo-lighter:hover {
      color: #b2b7ff;
    }
  
    .md\:hover\:text-indigo-lightest:hover {
      color: #e6e8ff;
    }
  
    .md\:hover\:text-purple-darkest:hover {
      color: #21183c;
    }
  
    .md\:hover\:text-purple-darker:hover {
      color: #382b5f;
    }
  
    .md\:hover\:text-purple-dark:hover {
      color: #794acf;
    }
  
    .md\:hover\:text-purple:hover {
      color: #9561e2;
    }
  
    .md\:hover\:text-purple-light:hover {
      color: #a779e9;
    }
  
    .md\:hover\:text-purple-lighter:hover {
      color: #d6bbfc;
    }
  
    .md\:hover\:text-purple-lightest:hover {
      color: #f3ebff;
    }
  
    .md\:hover\:text-pink-darkest:hover {
      color: #451225;
    }
  
    .md\:hover\:text-pink-darker:hover {
      color: #6f213f;
    }
  
    .md\:hover\:text-pink-dark:hover {
      color: #eb5286;
    }
  
    .md\:hover\:text-pink:hover {
      color: #f66d9b;
    }
  
    .md\:hover\:text-pink-light:hover {
      color: #fa7ea8;
    }
  
    .md\:hover\:text-pink-lighter:hover {
      color: #ffbbca;
    }
  
    .md\:hover\:text-pink-lightest:hover {
      color: #ffebef;
    }
  
    .md\:text-xs {
      font-size: .75rem;
    }
  
    .md\:text-sm {
      font-size: .875rem;
    }
  
    .md\:text-base {
      font-size: 1rem;
    }
  
    .md\:text-lg {
      font-size: 1.125rem;
    }
  
    .md\:text-xl {
      font-size: 1.25rem;
    }
  
    .md\:text-2xl {
      font-size: 1.5rem;
    }
  
    .md\:text-3xl {
      font-size: 1.875rem;
    }
  
    .md\:text-4xl {
      font-size: 2.25rem;
    }
  
    .md\:text-5xl {
      font-size: 3rem;
    }
  
    .md\:italic {
      font-style: italic;
    }
  
    .md\:roman {
      font-style: normal;
    }
  
    .md\:uppercase {
      text-transform: uppercase;
    }
  
    .md\:lowercase {
      text-transform: lowercase;
    }
  
    .md\:capitalize {
      text-transform: capitalize;
    }
  
    .md\:normal-case {
      text-transform: none;
    }
  
    .md\:underline {
      text-decoration: underline;
    }
  
    .md\:line-through {
      text-decoration: line-through;
    }
  
    .md\:no-underline {
      text-decoration: none;
    }
  
    .md\:antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  
    .md\:subpixel-antialiased {
      -webkit-font-smoothing: auto;
      -moz-osx-font-smoothing: auto;
    }
  
    .md\:hover\:italic:hover {
      font-style: italic;
    }
  
    .md\:hover\:roman:hover {
      font-style: normal;
    }
  
    .md\:hover\:uppercase:hover {
      text-transform: uppercase;
    }
  
    .md\:hover\:lowercase:hover {
      text-transform: lowercase;
    }
  
    .md\:hover\:capitalize:hover {
      text-transform: capitalize;
    }
  
    .md\:hover\:normal-case:hover {
      text-transform: none;
    }
  
    .md\:hover\:underline:hover {
      text-decoration: underline;
    }
  
    .md\:hover\:line-through:hover {
      text-decoration: line-through;
    }
  
    .md\:hover\:no-underline:hover {
      text-decoration: none;
    }
  
    .md\:hover\:antialiased:hover {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  
    .md\:hover\:subpixel-antialiased:hover {
      -webkit-font-smoothing: auto;
      -moz-osx-font-smoothing: auto;
    }
  
    .md\:tracking-tight {
      letter-spacing: -0.05em;
    }
  
    .md\:tracking-normal {
      letter-spacing: 0;
    }
  
    .md\:tracking-wide {
      letter-spacing: .05em;
    }
  
    .md\:select-none {
      user-select: none;
    }
  
    .md\:select-text {
      user-select: text;
    }
  
    .md\:align-baseline {
      vertical-align: baseline;
    }
  
    .md\:align-top {
      vertical-align: top;
    }
  
    .md\:align-middle {
      vertical-align: middle;
    }
  
    .md\:align-bottom {
      vertical-align: bottom;
    }
  
    .md\:align-text-top {
      vertical-align: text-top;
    }
  
    .md\:align-text-bottom {
      vertical-align: text-bottom;
    }
  
    .md\:visible {
      visibility: visible;
    }
  
    .md\:invisible {
      visibility: hidden;
    }
  
    .md\:whitespace-normal {
      white-space: normal;
    }
  
    .md\:whitespace-no-wrap {
      white-space: nowrap;
    }
  
    .md\:whitespace-pre {
      white-space: pre;
    }
  
    .md\:whitespace-pre-line {
      white-space: pre-line;
    }
  
    .md\:whitespace-pre-wrap {
      white-space: pre-wrap;
    }
  
    .md\:break-words {
      word-wrap: break-word;
    }
  
    .md\:break-normal {
      word-wrap: normal;
    }
  
    .md\:truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
  
    .md\:w-1 {
      width: .25rem;
    }
  
    .md\:w-2 {
      width: .5rem;
    }
  
    .md\:w-3 {
      width: .75rem;
    }
  
    .md\:w-4 {
      width: 1rem;
    }
  
    .md\:w-6 {
      width: 1.5rem;
    }
  
    .md\:w-8 {
      width: 2rem;
    }
  
    .md\:w-10 {
      width: 2.5rem;
    }
  
    .md\:w-12 {
      width: 3rem;
    }
  
    .md\:w-16 {
      width: 4rem;
    }
  
    .md\:w-24 {
      width: 6rem;
    }
  
    .md\:w-32 {
      width: 8rem;
    }
  
    .md\:w-48 {
      width: 12rem;
    }
  
    .md\:w-64 {
      width: 16rem;
    }
  
    .md\:w-auto {
      width: auto;
    }
  
    .md\:w-px {
      width: 1px;
    }
  
    .md\:w-1\/2 {
      width: 50%;
    }
  
    .md\:w-1\/3 {
      width: 33.33333%;
    }
  
    .md\:w-2\/3 {
      width: 66.66667%;
    }
  
    .md\:w-1\/4 {
      width: 25%;
    }
  
    .md\:w-3\/4 {
      width: 75%;
    }
  
    .md\:w-1\/5 {
      width: 20%;
    }
  
    .md\:w-2\/5 {
      width: 40%;
    }
  
    .md\:w-3\/5 {
      width: 60%;
    }
  
    .md\:w-4\/5 {
      width: 80%;
    }
  
    .md\:w-1\/6 {
      width: 16.66667%;
    }
  
    .md\:w-5\/6 {
      width: 83.33333%;
    }
  
    .md\:w-full {
      width: 100%;
    }
  
    .md\:w-screen {
      width: 100vw;
    }
  
    .md\:z-0 {
      z-index: 0;
    }
  
    .md\:z-10 {
      z-index: 10;
    }
  
    .md\:z-20 {
      z-index: 20;
    }
  
    .md\:z-30 {
      z-index: 30;
    }
  
    .md\:z-40 {
      z-index: 40;
    }
  
    .md\:z-50 {
      z-index: 50;
    }
  
    .md\:z-auto {
      z-index: auto;
    }
  }
  
  @media (min-width: 992px) {
    .lg\:list-reset {
      list-style: none;
      padding: 0;
    }
  
    .lg\:appearance-none {
      appearance: none;
    }
  
    .lg\:bg-fixed {
      background-attachment: fixed;
    }
  
    .lg\:bg-local {
      background-attachment: local;
    }
  
    .lg\:bg-scroll {
      background-attachment: scroll;
    }
  
    .lg\:bg-transparent {
      background-color: transparent;
    }
  
    .lg\:bg-black {
      background-color: #22292f;
    }
  
    .lg\:bg-grey-darkest {
      background-color: #3d4852;
    }
  
    .lg\:bg-grey-darker {
      background-color: #606f7b;
    }
  
    .lg\:bg-grey-dark {
      background-color: #8795a1;
    }
  
    .lg\:bg-grey {
      background-color: #b8c2cc;
    }
  
    .lg\:bg-grey-light {
      background-color: #dae1e7;
    }
  
    .lg\:bg-grey-lighter {
      background-color: #f1f5f8;
    }
  
    .lg\:bg-grey-lightest {
      background-color: #f8fafc;
    }
  
    .lg\:bg-white {
      background-color: #fff;
    }
  
    .lg\:bg-red-darkest {
      background-color: #3b0d0c;
    }
  
    .lg\:bg-red-darker {
      background-color: #621b18;
    }
  
    .lg\:bg-red-dark {
      background-color: #cc1f1a;
    }
  
    .lg\:bg-red {
      background-color: #e3342f;
    }
  
    .lg\:bg-red-light {
      background-color: #ef5753;
    }
  
    .lg\:bg-red-lighter {
      background-color: #f9acaa;
    }
  
    .lg\:bg-red-lightest {
      background-color: #fcebea;
    }
  
    .lg\:bg-orange-darkest {
      background-color: #462a16;
    }
  
    .lg\:bg-orange-darker {
      background-color: #613b1f;
    }
  
    .lg\:bg-orange-dark {
      background-color: #de751f;
    }
  
    .lg\:bg-orange {
      background-color: #f6993f;
    }
  
    .lg\:bg-orange-light {
      background-color: #faad63;
    }
  
    .lg\:bg-orange-lighter {
      background-color: #fcd9b6;
    }
  
    .lg\:bg-orange-lightest {
      background-color: #fff5eb;
    }
  
    .lg\:bg-yellow-darkest {
      background-color: #453411;
    }
  
    .lg\:bg-yellow-darker {
      background-color: #684f1d;
    }
  
    .lg\:bg-yellow-dark {
      background-color: #f2d024;
    }
  
    .lg\:bg-yellow {
      background-color: #ffed4a;
    }
  
    .lg\:bg-yellow-light {
      background-color: #fff382;
    }
  
    .lg\:bg-yellow-lighter {
      background-color: #fff9c2;
    }
  
    .lg\:bg-yellow-lightest {
      background-color: #fcfbeb;
    }
  
    .lg\:bg-green-darkest {
      background-color: #0f2f21;
    }
  
    .lg\:bg-green-darker {
      background-color: #1a4731;
    }
  
    .lg\:bg-green-dark {
      background-color: #1f9d55;
    }
  
    .lg\:bg-green {
      background-color: #38c172;
    }
  
    .lg\:bg-green-light {
      background-color: #51d88a;
    }
  
    .lg\:bg-green-lighter {
      background-color: #a2f5bf;
    }
  
    .lg\:bg-green-lightest {
      background-color: #e3fcec;
    }
  
    .lg\:bg-teal-darkest {
      background-color: #0d3331;
    }
  
    .lg\:bg-teal-darker {
      background-color: #20504f;
    }
  
    .lg\:bg-teal-dark {
      background-color: #38a89d;
    }
  
    .lg\:bg-teal {
      background-color: #4dc0b5;
    }
  
    .lg\:bg-teal-light {
      background-color: #64d5ca;
    }
  
    .lg\:bg-teal-lighter {
      background-color: #a0f0ed;
    }
  
    .lg\:bg-teal-lightest {
      background-color: #e8fffe;
    }
  
    .lg\:bg-blue-darkest {
      background-color: #12283a;
    }
  
    .lg\:bg-blue-darker {
      background-color: #1c3d5a;
    }
  
    .lg\:bg-blue-dark {
      background-color: #2779bd;
    }
  
    .lg\:bg-blue {
      background-color: #3490dc;
    }
  
    .lg\:bg-blue-light {
      background-color: #6cb2eb;
    }
  
    .lg\:bg-blue-lighter {
      background-color: #bcdefa;
    }
  
    .lg\:bg-blue-lightest {
      background-color: #eff8ff;
    }
  
    .lg\:bg-indigo-darkest {
      background-color: #191e38;
    }
  
    .lg\:bg-indigo-darker {
      background-color: #2f365f;
    }
  
    .lg\:bg-indigo-dark {
      background-color: #5661b3;
    }
  
    .lg\:bg-indigo {
      background-color: #6574cd;
    }
  
    .lg\:bg-indigo-light {
      background-color: #7886d7;
    }
  
    .lg\:bg-indigo-lighter {
      background-color: #b2b7ff;
    }
  
    .lg\:bg-indigo-lightest {
      background-color: #e6e8ff;
    }
  
    .lg\:bg-purple-darkest {
      background-color: #21183c;
    }
  
    .lg\:bg-purple-darker {
      background-color: #382b5f;
    }
  
    .lg\:bg-purple-dark {
      background-color: #794acf;
    }
  
    .lg\:bg-purple {
      background-color: #9561e2;
    }
  
    .lg\:bg-purple-light {
      background-color: #a779e9;
    }
  
    .lg\:bg-purple-lighter {
      background-color: #d6bbfc;
    }
  
    .lg\:bg-purple-lightest {
      background-color: #f3ebff;
    }
  
    .lg\:bg-pink-darkest {
      background-color: #451225;
    }
  
    .lg\:bg-pink-darker {
      background-color: #6f213f;
    }
  
    .lg\:bg-pink-dark {
      background-color: #eb5286;
    }
  
    .lg\:bg-pink {
      background-color: #f66d9b;
    }
  
    .lg\:bg-pink-light {
      background-color: #fa7ea8;
    }
  
    .lg\:bg-pink-lighter {
      background-color: #ffbbca;
    }
  
    .lg\:bg-pink-lightest {
      background-color: #ffebef;
    }
  
    .lg\:hover\:bg-transparent:hover {
      background-color: transparent;
    }
  
    .lg\:hover\:bg-black:hover {
      background-color: #22292f;
    }
  
    .lg\:hover\:bg-grey-darkest:hover {
      background-color: #3d4852;
    }
  
    .lg\:hover\:bg-grey-darker:hover {
      background-color: #606f7b;
    }
  
    .lg\:hover\:bg-grey-dark:hover {
      background-color: #8795a1;
    }
  
    .lg\:hover\:bg-grey:hover {
      background-color: #b8c2cc;
    }
  
    .lg\:hover\:bg-grey-light:hover {
      background-color: #dae1e7;
    }
  
    .lg\:hover\:bg-grey-lighter:hover {
      background-color: #f1f5f8;
    }
  
    .lg\:hover\:bg-grey-lightest:hover {
      background-color: #f8fafc;
    }
  
    .lg\:hover\:bg-white:hover {
      background-color: #fff;
    }
  
    .lg\:hover\:bg-red-darkest:hover {
      background-color: #3b0d0c;
    }
  
    .lg\:hover\:bg-red-darker:hover {
      background-color: #621b18;
    }
  
    .lg\:hover\:bg-red-dark:hover {
      background-color: #cc1f1a;
    }
  
    .lg\:hover\:bg-red:hover {
      background-color: #e3342f;
    }
  
    .lg\:hover\:bg-red-light:hover {
      background-color: #ef5753;
    }
  
    .lg\:hover\:bg-red-lighter:hover {
      background-color: #f9acaa;
    }
  
    .lg\:hover\:bg-red-lightest:hover {
      background-color: #fcebea;
    }
  
    .lg\:hover\:bg-orange-darkest:hover {
      background-color: #462a16;
    }
  
    .lg\:hover\:bg-orange-darker:hover {
      background-color: #613b1f;
    }
  
    .lg\:hover\:bg-orange-dark:hover {
      background-color: #de751f;
    }
  
    .lg\:hover\:bg-orange:hover {
      background-color: #f6993f;
    }
  
    .lg\:hover\:bg-orange-light:hover {
      background-color: #faad63;
    }
  
    .lg\:hover\:bg-orange-lighter:hover {
      background-color: #fcd9b6;
    }
  
    .lg\:hover\:bg-orange-lightest:hover {
      background-color: #fff5eb;
    }
  
    .lg\:hover\:bg-yellow-darkest:hover {
      background-color: #453411;
    }
  
    .lg\:hover\:bg-yellow-darker:hover {
      background-color: #684f1d;
    }
  
    .lg\:hover\:bg-yellow-dark:hover {
      background-color: #f2d024;
    }
  
    .lg\:hover\:bg-yellow:hover {
      background-color: #ffed4a;
    }
  
    .lg\:hover\:bg-yellow-light:hover {
      background-color: #fff382;
    }
  
    .lg\:hover\:bg-yellow-lighter:hover {
      background-color: #fff9c2;
    }
  
    .lg\:hover\:bg-yellow-lightest:hover {
      background-color: #fcfbeb;
    }
  
    .lg\:hover\:bg-green-darkest:hover {
      background-color: #0f2f21;
    }
  
    .lg\:hover\:bg-green-darker:hover {
      background-color: #1a4731;
    }
  
    .lg\:hover\:bg-green-dark:hover {
      background-color: #1f9d55;
    }
  
    .lg\:hover\:bg-green:hover {
      background-color: #38c172;
    }
  
    .lg\:hover\:bg-green-light:hover {
      background-color: #51d88a;
    }
  
    .lg\:hover\:bg-green-lighter:hover {
      background-color: #a2f5bf;
    }
  
    .lg\:hover\:bg-green-lightest:hover {
      background-color: #e3fcec;
    }
  
    .lg\:hover\:bg-teal-darkest:hover {
      background-color: #0d3331;
    }
  
    .lg\:hover\:bg-teal-darker:hover {
      background-color: #20504f;
    }
  
    .lg\:hover\:bg-teal-dark:hover {
      background-color: #38a89d;
    }
  
    .lg\:hover\:bg-teal:hover {
      background-color: #4dc0b5;
    }
  
    .lg\:hover\:bg-teal-light:hover {
      background-color: #64d5ca;
    }
  
    .lg\:hover\:bg-teal-lighter:hover {
      background-color: #a0f0ed;
    }
  
    .lg\:hover\:bg-teal-lightest:hover {
      background-color: #e8fffe;
    }
  
    .lg\:hover\:bg-blue-darkest:hover {
      background-color: #12283a;
    }
  
    .lg\:hover\:bg-blue-darker:hover {
      background-color: #1c3d5a;
    }
  
    .lg\:hover\:bg-blue-dark:hover {
      background-color: #2779bd;
    }
  
    .lg\:hover\:bg-blue:hover {
      background-color: #3490dc;
    }
  
    .lg\:hover\:bg-blue-light:hover {
      background-color: #6cb2eb;
    }
  
    .lg\:hover\:bg-blue-lighter:hover {
      background-color: #bcdefa;
    }
  
    .lg\:hover\:bg-blue-lightest:hover {
      background-color: #eff8ff;
    }
  
    .lg\:hover\:bg-indigo-darkest:hover {
      background-color: #191e38;
    }
  
    .lg\:hover\:bg-indigo-darker:hover {
      background-color: #2f365f;
    }
  
    .lg\:hover\:bg-indigo-dark:hover {
      background-color: #5661b3;
    }
  
    .lg\:hover\:bg-indigo:hover {
      background-color: #6574cd;
    }
  
    .lg\:hover\:bg-indigo-light:hover {
      background-color: #7886d7;
    }
  
    .lg\:hover\:bg-indigo-lighter:hover {
      background-color: #b2b7ff;
    }
  
    .lg\:hover\:bg-indigo-lightest:hover {
      background-color: #e6e8ff;
    }
  
    .lg\:hover\:bg-purple-darkest:hover {
      background-color: #21183c;
    }
  
    .lg\:hover\:bg-purple-darker:hover {
      background-color: #382b5f;
    }
  
    .lg\:hover\:bg-purple-dark:hover {
      background-color: #794acf;
    }
  
    .lg\:hover\:bg-purple:hover {
      background-color: #9561e2;
    }
  
    .lg\:hover\:bg-purple-light:hover {
      background-color: #a779e9;
    }
  
    .lg\:hover\:bg-purple-lighter:hover {
      background-color: #d6bbfc;
    }
  
    .lg\:hover\:bg-purple-lightest:hover {
      background-color: #f3ebff;
    }
  
    .lg\:hover\:bg-pink-darkest:hover {
      background-color: #451225;
    }
  
    .lg\:hover\:bg-pink-darker:hover {
      background-color: #6f213f;
    }
  
    .lg\:hover\:bg-pink-dark:hover {
      background-color: #eb5286;
    }
  
    .lg\:hover\:bg-pink:hover {
      background-color: #f66d9b;
    }
  
    .lg\:hover\:bg-pink-light:hover {
      background-color: #fa7ea8;
    }
  
    .lg\:hover\:bg-pink-lighter:hover {
      background-color: #ffbbca;
    }
  
    .lg\:hover\:bg-pink-lightest:hover {
      background-color: #ffebef;
    }
  
    .lg\:bg-bottom {
      background-position: bottom;
    }
  
    .lg\:bg-center {
      background-position: center;
    }
  
    .lg\:bg-left {
      background-position: left;
    }
  
    .lg\:bg-left-bottom {
      background-position: left bottom;
    }
  
    .lg\:bg-left-top {
      background-position: left top;
    }
  
    .lg\:bg-right {
      background-position: right;
    }
  
    .lg\:bg-right-bottom {
      background-position: right bottom;
    }
  
    .lg\:bg-right-top {
      background-position: right top;
    }
  
    .lg\:bg-top {
      background-position: top;
    }
  
    .lg\:bg-repeat {
      background-repeat: repeat;
    }
  
    .lg\:bg-no-repeat {
      background-repeat: no-repeat;
    }
  
    .lg\:bg-repeat-x {
      background-repeat: repeat-x;
    }
  
    .lg\:bg-repeat-y {
      background-repeat: repeat-y;
    }
  
    .lg\:bg-cover {
      background-size: cover;
    }
  
    .lg\:bg-contain {
      background-size: contain;
    }
  
    .lg\:border-transparent {
      border-color: transparent;
    }
  
    .lg\:border-black {
      border-color: #22292f;
    }
  
    .lg\:border-grey-darkest {
      border-color: #3d4852;
    }
  
    .lg\:border-grey-darker {
      border-color: #606f7b;
    }
  
    .lg\:border-grey-dark {
      border-color: #8795a1;
    }
  
    .lg\:border-grey {
      border-color: #b8c2cc;
    }
  
    .lg\:border-grey-light {
      border-color: #dae1e7;
    }
  
    .lg\:border-grey-lighter {
      border-color: #f1f5f8;
    }
  
    .lg\:border-grey-lightest {
      border-color: #f8fafc;
    }
  
    .lg\:border-white {
      border-color: #fff;
    }
  
    .lg\:border-red-darkest {
      border-color: #3b0d0c;
    }
  
    .lg\:border-red-darker {
      border-color: #621b18;
    }
  
    .lg\:border-red-dark {
      border-color: #cc1f1a;
    }
  
    .lg\:border-red {
      border-color: #e3342f;
    }
  
    .lg\:border-red-light {
      border-color: #ef5753;
    }
  
    .lg\:border-red-lighter {
      border-color: #f9acaa;
    }
  
    .lg\:border-red-lightest {
      border-color: #fcebea;
    }
  
    .lg\:border-orange-darkest {
      border-color: #462a16;
    }
  
    .lg\:border-orange-darker {
      border-color: #613b1f;
    }
  
    .lg\:border-orange-dark {
      border-color: #de751f;
    }
  
    .lg\:border-orange {
      border-color: #f6993f;
    }
  
    .lg\:border-orange-light {
      border-color: #faad63;
    }
  
    .lg\:border-orange-lighter {
      border-color: #fcd9b6;
    }
  
    .lg\:border-orange-lightest {
      border-color: #fff5eb;
    }
  
    .lg\:border-yellow-darkest {
      border-color: #453411;
    }
  
    .lg\:border-yellow-darker {
      border-color: #684f1d;
    }
  
    .lg\:border-yellow-dark {
      border-color: #f2d024;
    }
  
    .lg\:border-yellow {
      border-color: #ffed4a;
    }
  
    .lg\:border-yellow-light {
      border-color: #fff382;
    }
  
    .lg\:border-yellow-lighter {
      border-color: #fff9c2;
    }
  
    .lg\:border-yellow-lightest {
      border-color: #fcfbeb;
    }
  
    .lg\:border-green-darkest {
      border-color: #0f2f21;
    }
  
    .lg\:border-green-darker {
      border-color: #1a4731;
    }
  
    .lg\:border-green-dark {
      border-color: #1f9d55;
    }
  
    .lg\:border-green {
      border-color: #38c172;
    }
  
    .lg\:border-green-light {
      border-color: #51d88a;
    }
  
    .lg\:border-green-lighter {
      border-color: #a2f5bf;
    }
  
    .lg\:border-green-lightest {
      border-color: #e3fcec;
    }
  
    .lg\:border-teal-darkest {
      border-color: #0d3331;
    }
  
    .lg\:border-teal-darker {
      border-color: #20504f;
    }
  
    .lg\:border-teal-dark {
      border-color: #38a89d;
    }
  
    .lg\:border-teal {
      border-color: #4dc0b5;
    }
  
    .lg\:border-teal-light {
      border-color: #64d5ca;
    }
  
    .lg\:border-teal-lighter {
      border-color: #a0f0ed;
    }
  
    .lg\:border-teal-lightest {
      border-color: #e8fffe;
    }
  
    .lg\:border-blue-darkest {
      border-color: #12283a;
    }
  
    .lg\:border-blue-darker {
      border-color: #1c3d5a;
    }
  
    .lg\:border-blue-dark {
      border-color: #2779bd;
    }
  
    .lg\:border-blue {
      border-color: #3490dc;
    }
  
    .lg\:border-blue-light {
      border-color: #6cb2eb;
    }
  
    .lg\:border-blue-lighter {
      border-color: #bcdefa;
    }
  
    .lg\:border-blue-lightest {
      border-color: #eff8ff;
    }
  
    .lg\:border-indigo-darkest {
      border-color: #191e38;
    }
  
    .lg\:border-indigo-darker {
      border-color: #2f365f;
    }
  
    .lg\:border-indigo-dark {
      border-color: #5661b3;
    }
  
    .lg\:border-indigo {
      border-color: #6574cd;
    }
  
    .lg\:border-indigo-light {
      border-color: #7886d7;
    }
  
    .lg\:border-indigo-lighter {
      border-color: #b2b7ff;
    }
  
    .lg\:border-indigo-lightest {
      border-color: #e6e8ff;
    }
  
    .lg\:border-purple-darkest {
      border-color: #21183c;
    }
  
    .lg\:border-purple-darker {
      border-color: #382b5f;
    }
  
    .lg\:border-purple-dark {
      border-color: #794acf;
    }
  
    .lg\:border-purple {
      border-color: #9561e2;
    }
  
    .lg\:border-purple-light {
      border-color: #a779e9;
    }
  
    .lg\:border-purple-lighter {
      border-color: #d6bbfc;
    }
  
    .lg\:border-purple-lightest {
      border-color: #f3ebff;
    }
  
    .lg\:border-pink-darkest {
      border-color: #451225;
    }
  
    .lg\:border-pink-darker {
      border-color: #6f213f;
    }
  
    .lg\:border-pink-dark {
      border-color: #eb5286;
    }
  
    .lg\:border-pink {
      border-color: #f66d9b;
    }
  
    .lg\:border-pink-light {
      border-color: #fa7ea8;
    }
  
    .lg\:border-pink-lighter {
      border-color: #ffbbca;
    }
  
    .lg\:border-pink-lightest {
      border-color: #ffebef;
    }
  
    .lg\:hover\:border-transparent:hover {
      border-color: transparent;
    }
  
    .lg\:hover\:border-black:hover {
      border-color: #22292f;
    }
  
    .lg\:hover\:border-grey-darkest:hover {
      border-color: #3d4852;
    }
  
    .lg\:hover\:border-grey-darker:hover {
      border-color: #606f7b;
    }
  
    .lg\:hover\:border-grey-dark:hover {
      border-color: #8795a1;
    }
  
    .lg\:hover\:border-grey:hover {
      border-color: #b8c2cc;
    }
  
    .lg\:hover\:border-grey-light:hover {
      border-color: #dae1e7;
    }
  
    .lg\:hover\:border-grey-lighter:hover {
      border-color: #f1f5f8;
    }
  
    .lg\:hover\:border-grey-lightest:hover {
      border-color: #f8fafc;
    }
  
    .lg\:hover\:border-white:hover {
      border-color: #fff;
    }
  
    .lg\:hover\:border-red-darkest:hover {
      border-color: #3b0d0c;
    }
  
    .lg\:hover\:border-red-darker:hover {
      border-color: #621b18;
    }
  
    .lg\:hover\:border-red-dark:hover {
      border-color: #cc1f1a;
    }
  
    .lg\:hover\:border-red:hover {
      border-color: #e3342f;
    }
  
    .lg\:hover\:border-red-light:hover {
      border-color: #ef5753;
    }
  
    .lg\:hover\:border-red-lighter:hover {
      border-color: #f9acaa;
    }
  
    .lg\:hover\:border-red-lightest:hover {
      border-color: #fcebea;
    }
  
    .lg\:hover\:border-orange-darkest:hover {
      border-color: #462a16;
    }
  
    .lg\:hover\:border-orange-darker:hover {
      border-color: #613b1f;
    }
  
    .lg\:hover\:border-orange-dark:hover {
      border-color: #de751f;
    }
  
    .lg\:hover\:border-orange:hover {
      border-color: #f6993f;
    }
  
    .lg\:hover\:border-orange-light:hover {
      border-color: #faad63;
    }
  
    .lg\:hover\:border-orange-lighter:hover {
      border-color: #fcd9b6;
    }
  
    .lg\:hover\:border-orange-lightest:hover {
      border-color: #fff5eb;
    }
  
    .lg\:hover\:border-yellow-darkest:hover {
      border-color: #453411;
    }
  
    .lg\:hover\:border-yellow-darker:hover {
      border-color: #684f1d;
    }
  
    .lg\:hover\:border-yellow-dark:hover {
      border-color: #f2d024;
    }
  
    .lg\:hover\:border-yellow:hover {
      border-color: #ffed4a;
    }
  
    .lg\:hover\:border-yellow-light:hover {
      border-color: #fff382;
    }
  
    .lg\:hover\:border-yellow-lighter:hover {
      border-color: #fff9c2;
    }
  
    .lg\:hover\:border-yellow-lightest:hover {
      border-color: #fcfbeb;
    }
  
    .lg\:hover\:border-green-darkest:hover {
      border-color: #0f2f21;
    }
  
    .lg\:hover\:border-green-darker:hover {
      border-color: #1a4731;
    }
  
    .lg\:hover\:border-green-dark:hover {
      border-color: #1f9d55;
    }
  
    .lg\:hover\:border-green:hover {
      border-color: #38c172;
    }
  
    .lg\:hover\:border-green-light:hover {
      border-color: #51d88a;
    }
  
    .lg\:hover\:border-green-lighter:hover {
      border-color: #a2f5bf;
    }
  
    .lg\:hover\:border-green-lightest:hover {
      border-color: #e3fcec;
    }
  
    .lg\:hover\:border-teal-darkest:hover {
      border-color: #0d3331;
    }
  
    .lg\:hover\:border-teal-darker:hover {
      border-color: #20504f;
    }
  
    .lg\:hover\:border-teal-dark:hover {
      border-color: #38a89d;
    }
  
    .lg\:hover\:border-teal:hover {
      border-color: #4dc0b5;
    }
  
    .lg\:hover\:border-teal-light:hover {
      border-color: #64d5ca;
    }
  
    .lg\:hover\:border-teal-lighter:hover {
      border-color: #a0f0ed;
    }
  
    .lg\:hover\:border-teal-lightest:hover {
      border-color: #e8fffe;
    }
  
    .lg\:hover\:border-blue-darkest:hover {
      border-color: #12283a;
    }
  
    .lg\:hover\:border-blue-darker:hover {
      border-color: #1c3d5a;
    }
  
    .lg\:hover\:border-blue-dark:hover {
      border-color: #2779bd;
    }
  
    .lg\:hover\:border-blue:hover {
      border-color: #3490dc;
    }
  
    .lg\:hover\:border-blue-light:hover {
      border-color: #6cb2eb;
    }
  
    .lg\:hover\:border-blue-lighter:hover {
      border-color: #bcdefa;
    }
  
    .lg\:hover\:border-blue-lightest:hover {
      border-color: #eff8ff;
    }
  
    .lg\:hover\:border-indigo-darkest:hover {
      border-color: #191e38;
    }
  
    .lg\:hover\:border-indigo-darker:hover {
      border-color: #2f365f;
    }
  
    .lg\:hover\:border-indigo-dark:hover {
      border-color: #5661b3;
    }
  
    .lg\:hover\:border-indigo:hover {
      border-color: #6574cd;
    }
  
    .lg\:hover\:border-indigo-light:hover {
      border-color: #7886d7;
    }
  
    .lg\:hover\:border-indigo-lighter:hover {
      border-color: #b2b7ff;
    }
  
    .lg\:hover\:border-indigo-lightest:hover {
      border-color: #e6e8ff;
    }
  
    .lg\:hover\:border-purple-darkest:hover {
      border-color: #21183c;
    }
  
    .lg\:hover\:border-purple-darker:hover {
      border-color: #382b5f;
    }
  
    .lg\:hover\:border-purple-dark:hover {
      border-color: #794acf;
    }
  
    .lg\:hover\:border-purple:hover {
      border-color: #9561e2;
    }
  
    .lg\:hover\:border-purple-light:hover {
      border-color: #a779e9;
    }
  
    .lg\:hover\:border-purple-lighter:hover {
      border-color: #d6bbfc;
    }
  
    .lg\:hover\:border-purple-lightest:hover {
      border-color: #f3ebff;
    }
  
    .lg\:hover\:border-pink-darkest:hover {
      border-color: #451225;
    }
  
    .lg\:hover\:border-pink-darker:hover {
      border-color: #6f213f;
    }
  
    .lg\:hover\:border-pink-dark:hover {
      border-color: #eb5286;
    }
  
    .lg\:hover\:border-pink:hover {
      border-color: #f66d9b;
    }
  
    .lg\:hover\:border-pink-light:hover {
      border-color: #fa7ea8;
    }
  
    .lg\:hover\:border-pink-lighter:hover {
      border-color: #ffbbca;
    }
  
    .lg\:hover\:border-pink-lightest:hover {
      border-color: #ffebef;
    }
  
    .lg\:rounded-none {
      border-radius: 0;
    }
  
    .lg\:rounded-sm {
      border-radius: .125rem;
    }
  
    .lg\:rounded {
      border-radius: .25rem;
    }
  
    .lg\:rounded-lg {
      border-radius: .5rem;
    }
  
    .lg\:rounded-full {
      border-radius: 9999px;
    }
  
    .lg\:rounded-t-none {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  
    .lg\:rounded-r-none {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }
  
    .lg\:rounded-b-none {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
  
    .lg\:rounded-l-none {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }
  
    .lg\:rounded-t-sm {
      border-top-left-radius: .125rem;
      border-top-right-radius: .125rem;
    }
  
    .lg\:rounded-r-sm {
      border-top-right-radius: .125rem;
      border-bottom-right-radius: .125rem;
    }
  
    .lg\:rounded-b-sm {
      border-bottom-right-radius: .125rem;
      border-bottom-left-radius: .125rem;
    }
  
    .lg\:rounded-l-sm {
      border-top-left-radius: .125rem;
      border-bottom-left-radius: .125rem;
    }
  
    .lg\:rounded-t {
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem;
    }
  
    .lg\:rounded-r {
      border-top-right-radius: .25rem;
      border-bottom-right-radius: .25rem;
    }
  
    .lg\:rounded-b {
      border-bottom-right-radius: .25rem;
      border-bottom-left-radius: .25rem;
    }
  
    .lg\:rounded-l {
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem;
    }
  
    .lg\:rounded-t-lg {
      border-top-left-radius: .5rem;
      border-top-right-radius: .5rem;
    }
  
    .lg\:rounded-r-lg {
      border-top-right-radius: .5rem;
      border-bottom-right-radius: .5rem;
    }
  
    .lg\:rounded-b-lg {
      border-bottom-right-radius: .5rem;
      border-bottom-left-radius: .5rem;
    }
  
    .lg\:rounded-l-lg {
      border-top-left-radius: .5rem;
      border-bottom-left-radius: .5rem;
    }
  
    .lg\:rounded-t-full {
      border-top-left-radius: 9999px;
      border-top-right-radius: 9999px;
    }
  
    .lg\:rounded-r-full {
      border-top-right-radius: 9999px;
      border-bottom-right-radius: 9999px;
    }
  
    .lg\:rounded-b-full {
      border-bottom-right-radius: 9999px;
      border-bottom-left-radius: 9999px;
    }
  
    .lg\:rounded-l-full {
      border-top-left-radius: 9999px;
      border-bottom-left-radius: 9999px;
    }
  
    .lg\:rounded-tl-none {
      border-top-left-radius: 0;
    }
  
    .lg\:rounded-tr-none {
      border-top-right-radius: 0;
    }
  
    .lg\:rounded-br-none {
      border-bottom-right-radius: 0;
    }
  
    .lg\:rounded-bl-none {
      border-bottom-left-radius: 0;
    }
  
    .lg\:rounded-tl-sm {
      border-top-left-radius: .125rem;
    }
  
    .lg\:rounded-tr-sm {
      border-top-right-radius: .125rem;
    }
  
    .lg\:rounded-br-sm {
      border-bottom-right-radius: .125rem;
    }
  
    .lg\:rounded-bl-sm {
      border-bottom-left-radius: .125rem;
    }
  
    .lg\:rounded-tl {
      border-top-left-radius: .25rem;
    }
  
    .lg\:rounded-tr {
      border-top-right-radius: .25rem;
    }
  
    .lg\:rounded-br {
      border-bottom-right-radius: .25rem;
    }
  
    .lg\:rounded-bl {
      border-bottom-left-radius: .25rem;
    }
  
    .lg\:rounded-tl-lg {
      border-top-left-radius: .5rem;
    }
  
    .lg\:rounded-tr-lg {
      border-top-right-radius: .5rem;
    }
  
    .lg\:rounded-br-lg {
      border-bottom-right-radius: .5rem;
    }
  
    .lg\:rounded-bl-lg {
      border-bottom-left-radius: .5rem;
    }
  
    .lg\:rounded-tl-full {
      border-top-left-radius: 9999px;
    }
  
    .lg\:rounded-tr-full {
      border-top-right-radius: 9999px;
    }
  
    .lg\:rounded-br-full {
      border-bottom-right-radius: 9999px;
    }
  
    .lg\:rounded-bl-full {
      border-bottom-left-radius: 9999px;
    }
  
    .lg\:border-solid {
      border-style: solid;
    }
  
    .lg\:border-dashed {
      border-style: dashed;
    }
  
    .lg\:border-dotted {
      border-style: dotted;
    }
  
    .lg\:border-none {
      border-style: none;
    }
  
    .lg\:border-0 {
      border-width: 0;
    }
  
    .lg\:border-2 {
      border-width: 2px;
    }
  
    .lg\:border-4 {
      border-width: 4px;
    }
  
    .lg\:border-8 {
      border-width: 8px;
    }
  
    .lg\:border {
      border-width: 1px;
    }
  
    .lg\:border-t-0 {
      border-top-width: 0;
    }
  
    .lg\:border-r-0 {
      border-right-width: 0;
    }
  
    .lg\:border-b-0 {
      border-bottom-width: 0;
    }
  
    .lg\:border-l-0 {
      border-left-width: 0;
    }
  
    .lg\:border-t-2 {
      border-top-width: 2px;
    }
  
    .lg\:border-r-2 {
      border-right-width: 2px;
    }
  
    .lg\:border-b-2 {
      border-bottom-width: 2px;
    }
  
    .lg\:border-l-2 {
      border-left-width: 2px;
    }
  
    .lg\:border-t-4 {
      border-top-width: 4px;
    }
  
    .lg\:border-r-4 {
      border-right-width: 4px;
    }
  
    .lg\:border-b-4 {
      border-bottom-width: 4px;
    }
  
    .lg\:border-l-4 {
      border-left-width: 4px;
    }
  
    .lg\:border-t-8 {
      border-top-width: 8px;
    }
  
    .lg\:border-r-8 {
      border-right-width: 8px;
    }
  
    .lg\:border-b-8 {
      border-bottom-width: 8px;
    }
  
    .lg\:border-l-8 {
      border-left-width: 8px;
    }
  
    .lg\:border-t {
      border-top-width: 1px;
    }
  
    .lg\:border-r {
      border-right-width: 1px;
    }
  
    .lg\:border-b {
      border-bottom-width: 1px;
    }
  
    .lg\:border-l {
      border-left-width: 1px;
    }
  
    .lg\:cursor-auto {
      cursor: auto;
    }
  
    .lg\:cursor-default {
      cursor: default;
    }
  
    .lg\:cursor-pointer {
      cursor: pointer;
    }
  
    .lg\:cursor-not-allowed {
      cursor: not-allowed;
    }
  
    .lg\:block {
      display: block;
    }
  
    .lg\:inline-block {
      display: inline-block;
    }
  
    .lg\:inline {
      display: inline;
    }
  
    .lg\:table {
      display: table;
    }
  
    .lg\:table-row {
      display: table-row;
    }
  
    .lg\:table-cell {
      display: table-cell;
    }
  
    .lg\:hidden {
      display: none;
    }
  
    .lg\:flex {
      display: flex;
    }
  
    .lg\:inline-flex {
      display: inline-flex;
    }
  
    .lg\:flex-row {
      flex-direction: row;
    }
  
    .lg\:flex-row-reverse {
      flex-direction: row-reverse;
    }
  
    .lg\:flex-col {
      flex-direction: column;
    }
  
    .lg\:flex-col-reverse {
      flex-direction: column-reverse;
    }
  
    .lg\:flex-wrap {
      flex-wrap: wrap;
    }
  
    .lg\:flex-wrap-reverse {
      flex-wrap: wrap-reverse;
    }
  
    .lg\:flex-no-wrap {
      flex-wrap: nowrap;
    }
  
    .lg\:items-start {
      align-items: flex-start;
    }
  
    .lg\:items-end {
      align-items: flex-end;
    }
  
    .lg\:items-center {
      align-items: center;
    }
  
    .lg\:items-baseline {
      align-items: baseline;
    }
  
    .lg\:items-stretch {
      align-items: stretch;
    }
  
    .lg\:self-auto {
      align-self: auto;
    }
  
    .lg\:self-start {
      align-self: flex-start;
    }
  
    .lg\:self-end {
      align-self: flex-end;
    }
  
    .lg\:self-center {
      align-self: center;
    }
  
    .lg\:self-stretch {
      align-self: stretch;
    }
  
    .lg\:justify-start {
      justify-content: flex-start;
    }
  
    .lg\:justify-end {
      justify-content: flex-end;
    }
  
    .lg\:justify-center {
      justify-content: center;
    }
  
    .lg\:justify-between {
      justify-content: space-between;
    }
  
    .lg\:justify-around {
      justify-content: space-around;
    }
  
    .lg\:content-center {
      align-content: center;
    }
  
    .lg\:content-start {
      align-content: flex-start;
    }
  
    .lg\:content-end {
      align-content: flex-end;
    }
  
    .lg\:content-between {
      align-content: space-between;
    }
  
    .lg\:content-around {
      align-content: space-around;
    }
  
    .lg\:flex-1 {
      flex: 1;
    }
  
    .lg\:flex-auto {
      flex: auto;
    }
  
    .lg\:flex-initial {
      flex: initial;
    }
  
    .lg\:flex-none {
      flex: none;
    }
  
    .lg\:flex-grow {
      flex-grow: 1;
    }
  
    .lg\:flex-shrink {
      flex-shrink: 1;
    }
  
    .lg\:flex-no-grow {
      flex-grow: 0;
    }
  
    .lg\:flex-no-shrink {
      flex-shrink: 0;
    }
  
    .lg\:float-right {
      float: right;
    }
  
    .lg\:float-left {
      float: left;
    }
  
    .lg\:float-none {
      float: none;
    }
  
    .lg\:clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
  
    .lg\:font-sans {
      font-family: system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
    }
  
    .lg\:font-serif {
      font-family: Constantia, Lucida Bright, Lucidabright, Lucida Serif, Lucida, DejaVu Serif, Bitstream Vera Serif, Liberation Serif, Georgia, serif;
    }
  
    .lg\:font-mono {
      font-family: Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
    }
  
    .lg\:font-hairline {
      font-weight: 100;
    }
  
    .lg\:font-thin {
      font-weight: 200;
    }
  
    .lg\:font-light {
      font-weight: 300;
    }
  
    .lg\:font-normal {
      font-weight: 400;
    }
  
    .lg\:font-medium {
      font-weight: 500;
    }
  
    .lg\:font-semibold {
      font-weight: 600;
    }
  
    .lg\:font-bold {
      font-weight: 700;
    }
  
    .lg\:font-extrabold {
      font-weight: 800;
    }
  
    .lg\:font-black {
      font-weight: 900;
    }
  
    .lg\:hover\:font-hairline:hover {
      font-weight: 100;
    }
  
    .lg\:hover\:font-thin:hover {
      font-weight: 200;
    }
  
    .lg\:hover\:font-light:hover {
      font-weight: 300;
    }
  
    .lg\:hover\:font-normal:hover {
      font-weight: 400;
    }
  
    .lg\:hover\:font-medium:hover {
      font-weight: 500;
    }
  
    .lg\:hover\:font-semibold:hover {
      font-weight: 600;
    }
  
    .lg\:hover\:font-bold:hover {
      font-weight: 700;
    }
  
    .lg\:hover\:font-extrabold:hover {
      font-weight: 800;
    }
  
    .lg\:hover\:font-black:hover {
      font-weight: 900;
    }
  
    .lg\:h-1 {
      height: .25rem;
    }
  
    .lg\:h-2 {
      height: .5rem;
    }
  
    .lg\:h-3 {
      height: .75rem;
    }
  
    .lg\:h-4 {
      height: 1rem;
    }
  
    .lg\:h-6 {
      height: 1.5rem;
    }
  
    .lg\:h-8 {
      height: 2rem;
    }
  
    .lg\:h-10 {
      height: 2.5rem;
    }
  
    .lg\:h-12 {
      height: 3rem;
    }
  
    .lg\:h-16 {
      height: 4rem;
    }
  
    .lg\:h-24 {
      height: 6rem;
    }
  
    .lg\:h-32 {
      height: 8rem;
    }
  
    .lg\:h-48 {
      height: 12rem;
    }
  
    .lg\:h-64 {
      height: 16rem;
    }
  
    .lg\:h-auto {
      height: auto;
    }
  
    .lg\:h-px {
      height: 1px;
    }
  
    .lg\:h-full {
      height: 100%;
    }
  
    .lg\:h-screen {
      height: 100vh;
    }
  
    .lg\:leading-none {
      line-height: 1;
    }
  
    .lg\:leading-tight {
      line-height: 1.25;
    }
  
    .lg\:leading-normal {
      line-height: 1.5;
    }
  
    .lg\:leading-loose {
      line-height: 2;
    }
  
    .lg\:m-0 {
      margin: 0;
    }
  
    .lg\:m-1 {
      margin: .25rem;
    }
  
    .lg\:m-2 {
      margin: .5rem;
    }
  
    .lg\:m-3 {
      margin: .75rem;
    }
  
    .lg\:m-4 {
      margin: 1rem;
    }
  
    .lg\:m-6 {
      margin: 1.5rem;
    }
  
    .lg\:m-8 {
      margin: 2rem;
    }
  
    .lg\:m-auto {
      margin: auto;
    }
  
    .lg\:m-px {
      margin: 1px;
    }
  
    .lg\:my-0 {
      margin-top: 0;
      margin-bottom: 0;
    }
  
    .lg\:mx-0 {
      margin-left: 0;
      margin-right: 0;
    }
  
    .lg\:my-1 {
      margin-top: .25rem;
      margin-bottom: .25rem;
    }
  
    .lg\:mx-1 {
      margin-left: .25rem;
      margin-right: .25rem;
    }
  
    .lg\:my-2 {
      margin-top: .5rem;
      margin-bottom: .5rem;
    }
  
    .lg\:mx-2 {
      margin-left: .5rem;
      margin-right: .5rem;
    }
  
    .lg\:my-3 {
      margin-top: .75rem;
      margin-bottom: .75rem;
    }
  
    .lg\:mx-3 {
      margin-left: .75rem;
      margin-right: .75rem;
    }
  
    .lg\:my-4 {
      margin-top: 1rem;
      margin-bottom: 1rem;
    }
  
    .lg\:mx-4 {
      margin-left: 1rem;
      margin-right: 1rem;
    }
  
    .lg\:my-6 {
      margin-top: 1.5rem;
      margin-bottom: 1.5rem;
    }
  
    .lg\:mx-6 {
      margin-left: 1.5rem;
      margin-right: 1.5rem;
    }
  
    .lg\:my-8 {
      margin-top: 2rem;
      margin-bottom: 2rem;
    }
  
    .lg\:mx-8 {
      margin-left: 2rem;
      margin-right: 2rem;
    }
  
    .lg\:my-auto {
      margin-top: auto;
      margin-bottom: auto;
    }
  
    .lg\:mx-auto {
      margin-left: auto;
      margin-right: auto;
    }
  
    .lg\:my-px {
      margin-top: 1px;
      margin-bottom: 1px;
    }
  
    .lg\:mx-px {
      margin-left: 1px;
      margin-right: 1px;
    }
  
    .lg\:mt-0 {
      margin-top: 0;
    }
  
    .lg\:mr-0 {
      margin-right: 0;
    }
  
    .lg\:mb-0 {
      margin-bottom: 0;
    }
  
    .lg\:ml-0 {
      margin-left: 0;
    }
  
    .lg\:mt-1 {
      margin-top: .25rem;
    }
  
    .lg\:mr-1 {
      margin-right: .25rem;
    }
  
    .lg\:mb-1 {
      margin-bottom: .25rem;
    }
  
    .lg\:ml-1 {
      margin-left: .25rem;
    }
  
    .lg\:mt-2 {
      margin-top: .5rem;
    }
  
    .lg\:mr-2 {
      margin-right: .5rem;
    }
  
    .lg\:mb-2 {
      margin-bottom: .5rem;
    }
  
    .lg\:ml-2 {
      margin-left: .5rem;
    }
  
    .lg\:mt-3 {
      margin-top: .75rem;
    }
  
    .lg\:mr-3 {
      margin-right: .75rem;
    }
  
    .lg\:mb-3 {
      margin-bottom: .75rem;
    }
  
    .lg\:ml-3 {
      margin-left: .75rem;
    }
  
    .lg\:mt-4 {
      margin-top: 1rem;
    }
  
    .lg\:mr-4 {
      margin-right: 1rem;
    }
  
    .lg\:mb-4 {
      margin-bottom: 1rem;
    }
  
    .lg\:ml-4 {
      margin-left: 1rem;
    }
  
    .lg\:mt-6 {
      margin-top: 1.5rem;
    }
  
    .lg\:mr-6 {
      margin-right: 1.5rem;
    }
  
    .lg\:mb-6 {
      margin-bottom: 1.5rem;
    }
  
    .lg\:ml-6 {
      margin-left: 1.5rem;
    }
  
    .lg\:mt-8 {
      margin-top: 2rem;
    }
  
    .lg\:mr-8 {
      margin-right: 2rem;
    }
  
    .lg\:mb-8 {
      margin-bottom: 2rem;
    }
  
    .lg\:ml-8 {
      margin-left: 2rem;
    }
  
    .lg\:mt-auto {
      margin-top: auto;
    }
  
    .lg\:mr-auto {
      margin-right: auto;
    }
  
    .lg\:mb-auto {
      margin-bottom: auto;
    }
  
    .lg\:ml-auto {
      margin-left: auto;
    }
  
    .lg\:mt-px {
      margin-top: 1px;
    }
  
    .lg\:mr-px {
      margin-right: 1px;
    }
  
    .lg\:mb-px {
      margin-bottom: 1px;
    }
  
    .lg\:ml-px {
      margin-left: 1px;
    }
  
    .lg\:max-h-full {
      max-height: 100%;
    }
  
    .lg\:max-h-screen {
      max-height: 100vh;
    }
  
    .lg\:max-w-xs {
      max-width: 20rem;
    }
  
    .lg\:max-w-sm {
      max-width: 30rem;
    }
  
    .lg\:max-w-md {
      max-width: 40rem;
    }
  
    .lg\:max-w-lg {
      max-width: 50rem;
    }
  
    .lg\:max-w-xl {
      max-width: 60rem;
    }
  
    .lg\:max-w-2xl {
      max-width: 70rem;
    }
  
    .lg\:max-w-3xl {
      max-width: 80rem;
    }
  
    .lg\:max-w-4xl {
      max-width: 90rem;
    }
  
    .lg\:max-w-5xl {
      max-width: 100rem;
    }
  
    .lg\:max-w-full {
      max-width: 100%;
    }
  
    .lg\:min-h-0 {
      min-height: 0;
    }
  
    .lg\:min-h-full {
      min-height: 100%;
    }
  
    .lg\:min-h-screen {
      min-height: 100vh;
    }
  
    .lg\:min-w-0 {
      min-width: 0;
    }
  
    .lg\:min-w-full {
      min-width: 100%;
    }
  
    .lg\:-m-0 {
      margin: 0;
    }
  
    .lg\:-m-1 {
      margin: -0.25rem;
    }
  
    .lg\:-m-2 {
      margin: -0.5rem;
    }
  
    .lg\:-m-3 {
      margin: -0.75rem;
    }
  
    .lg\:-m-4 {
      margin: -1rem;
    }
  
    .lg\:-m-6 {
      margin: -1.5rem;
    }
  
    .lg\:-m-8 {
      margin: -2rem;
    }
  
    .lg\:-m-px {
      margin: -1px;
    }
  
    .lg\:-my-0 {
      margin-top: 0;
      margin-bottom: 0;
    }
  
    .lg\:-mx-0 {
      margin-left: 0;
      margin-right: 0;
    }
  
    .lg\:-my-1 {
      margin-top: -0.25rem;
      margin-bottom: -0.25rem;
    }
  
    .lg\:-mx-1 {
      margin-left: -0.25rem;
      margin-right: -0.25rem;
    }
  
    .lg\:-my-2 {
      margin-top: -0.5rem;
      margin-bottom: -0.5rem;
    }
  
    .lg\:-mx-2 {
      margin-left: -0.5rem;
      margin-right: -0.5rem;
    }
  
    .lg\:-my-3 {
      margin-top: -0.75rem;
      margin-bottom: -0.75rem;
    }
  
    .lg\:-mx-3 {
      margin-left: -0.75rem;
      margin-right: -0.75rem;
    }
  
    .lg\:-my-4 {
      margin-top: -1rem;
      margin-bottom: -1rem;
    }
  
    .lg\:-mx-4 {
      margin-left: -1rem;
      margin-right: -1rem;
    }
  
    .lg\:-my-6 {
      margin-top: -1.5rem;
      margin-bottom: -1.5rem;
    }
  
    .lg\:-mx-6 {
      margin-left: -1.5rem;
      margin-right: -1.5rem;
    }
  
    .lg\:-my-8 {
      margin-top: -2rem;
      margin-bottom: -2rem;
    }
  
    .lg\:-mx-8 {
      margin-left: -2rem;
      margin-right: -2rem;
    }
  
    .lg\:-my-px {
      margin-top: -1px;
      margin-bottom: -1px;
    }
  
    .lg\:-mx-px {
      margin-left: -1px;
      margin-right: -1px;
    }
  
    .lg\:-mt-0 {
      margin-top: 0;
    }
  
    .lg\:-mr-0 {
      margin-right: 0;
    }
  
    .lg\:-mb-0 {
      margin-bottom: 0;
    }
  
    .lg\:-ml-0 {
      margin-left: 0;
    }
  
    .lg\:-mt-1 {
      margin-top: -0.25rem;
    }
  
    .lg\:-mr-1 {
      margin-right: -0.25rem;
    }
  
    .lg\:-mb-1 {
      margin-bottom: -0.25rem;
    }
  
    .lg\:-ml-1 {
      margin-left: -0.25rem;
    }
  
    .lg\:-mt-2 {
      margin-top: -0.5rem;
    }
  
    .lg\:-mr-2 {
      margin-right: -0.5rem;
    }
  
    .lg\:-mb-2 {
      margin-bottom: -0.5rem;
    }
  
    .lg\:-ml-2 {
      margin-left: -0.5rem;
    }
  
    .lg\:-mt-3 {
      margin-top: -0.75rem;
    }
  
    .lg\:-mr-3 {
      margin-right: -0.75rem;
    }
  
    .lg\:-mb-3 {
      margin-bottom: -0.75rem;
    }
  
    .lg\:-ml-3 {
      margin-left: -0.75rem;
    }
  
    .lg\:-mt-4 {
      margin-top: -1rem;
    }
  
    .lg\:-mr-4 {
      margin-right: -1rem;
    }
  
    .lg\:-mb-4 {
      margin-bottom: -1rem;
    }
  
    .lg\:-ml-4 {
      margin-left: -1rem;
    }
  
    .lg\:-mt-6 {
      margin-top: -1.5rem;
    }
  
    .lg\:-mr-6 {
      margin-right: -1.5rem;
    }
  
    .lg\:-mb-6 {
      margin-bottom: -1.5rem;
    }
  
    .lg\:-ml-6 {
      margin-left: -1.5rem;
    }
  
    .lg\:-mt-8 {
      margin-top: -2rem;
    }
  
    .lg\:-mr-8 {
      margin-right: -2rem;
    }
  
    .lg\:-mb-8 {
      margin-bottom: -2rem;
    }
  
    .lg\:-ml-8 {
      margin-left: -2rem;
    }
  
    .lg\:-mt-px {
      margin-top: -1px;
    }
  
    .lg\:-mr-px {
      margin-right: -1px;
    }
  
    .lg\:-mb-px {
      margin-bottom: -1px;
    }
  
    .lg\:-ml-px {
      margin-left: -1px;
    }
  
    .lg\:opacity-0 {
      opacity: 0;
    }
  
    .lg\:opacity-25 {
      opacity: .25;
    }
  
    .lg\:opacity-50 {
      opacity: .5;
    }
  
    .lg\:opacity-75 {
      opacity: .75;
    }
  
    .lg\:opacity-100 {
      opacity: 1;
    }
  
    .lg\:overflow-auto {
      overflow: auto;
    }
  
    .lg\:overflow-hidden {
      overflow: hidden;
    }
  
    .lg\:overflow-visible {
      overflow: visible;
    }
  
    .lg\:overflow-scroll {
      overflow: scroll;
    }
  
    .lg\:overflow-x-scroll {
      overflow-x: auto;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
  
    .lg\:overflow-y-scroll {
      overflow-y: auto;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
  
    .lg\:scrolling-touch {
      -webkit-overflow-scrolling: touch;
    }
  
    .lg\:scrolling-auto {
      -webkit-overflow-scrolling: auto;
    }
  
    .lg\:p-0 {
      padding: 0;
    }
  
    .lg\:p-1 {
      padding: .25rem;
    }
  
    .lg\:p-2 {
      padding: .5rem;
    }
  
    .lg\:p-3 {
      padding: .75rem;
    }
  
    .lg\:p-4 {
      padding: 1rem;
    }
  
    .lg\:p-6 {
      padding: 1.5rem;
    }
  
    .lg\:p-8 {
      padding: 2rem;
    }
  
    .lg\:p-px {
      padding: 1px;
    }
  
    .lg\:py-0 {
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .lg\:px-0 {
      padding-left: 0;
      padding-right: 0;
    }
  
    .lg\:py-1 {
      padding-top: .25rem;
      padding-bottom: .25rem;
    }
  
    .lg\:px-1 {
      padding-left: .25rem;
      padding-right: .25rem;
    }
  
    .lg\:py-2 {
      padding-top: .5rem;
      padding-bottom: .5rem;
    }
  
    .lg\:px-2 {
      padding-left: .5rem;
      padding-right: .5rem;
    }
  
    .lg\:py-3 {
      padding-top: .75rem;
      padding-bottom: .75rem;
    }
  
    .lg\:px-3 {
      padding-left: .75rem;
      padding-right: .75rem;
    }
  
    .lg\:py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
  
    .lg\:px-4 {
      padding-left: 1rem;
      padding-right: 1rem;
    }
  
    .lg\:py-6 {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }
  
    .lg\:px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }
  
    .lg\:py-8 {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }
  
    .lg\:px-8 {
      padding-left: 2rem;
      padding-right: 2rem;
    }
  
    .lg\:py-px {
      padding-top: 1px;
      padding-bottom: 1px;
    }
  
    .lg\:px-px {
      padding-left: 1px;
      padding-right: 1px;
    }
  
    .lg\:pt-0 {
      padding-top: 0;
    }
  
    .lg\:pr-0 {
      padding-right: 0;
    }
  
    .lg\:pb-0 {
      padding-bottom: 0;
    }
  
    .lg\:pl-0 {
      padding-left: 0;
    }
  
    .lg\:pt-1 {
      padding-top: .25rem;
    }
  
    .lg\:pr-1 {
      padding-right: .25rem;
    }
  
    .lg\:pb-1 {
      padding-bottom: .25rem;
    }
  
    .lg\:pl-1 {
      padding-left: .25rem;
    }
  
    .lg\:pt-2 {
      padding-top: .5rem;
    }
  
    .lg\:pr-2 {
      padding-right: .5rem;
    }
  
    .lg\:pb-2 {
      padding-bottom: .5rem;
    }
  
    .lg\:pl-2 {
      padding-left: .5rem;
    }
  
    .lg\:pt-3 {
      padding-top: .75rem;
    }
  
    .lg\:pr-3 {
      padding-right: .75rem;
    }
  
    .lg\:pb-3 {
      padding-bottom: .75rem;
    }
  
    .lg\:pl-3 {
      padding-left: .75rem;
    }
  
    .lg\:pt-4 {
      padding-top: 1rem;
    }
  
    .lg\:pr-4 {
      padding-right: 1rem;
    }
  
    .lg\:pb-4 {
      padding-bottom: 1rem;
    }
  
    .lg\:pl-4 {
      padding-left: 1rem;
    }
  
    .lg\:pt-6 {
      padding-top: 1.5rem;
    }
  
    .lg\:pr-6 {
      padding-right: 1.5rem;
    }
  
    .lg\:pb-6 {
      padding-bottom: 1.5rem;
    }
  
    .lg\:pl-6 {
      padding-left: 1.5rem;
    }
  
    .lg\:pt-8 {
      padding-top: 2rem;
    }
  
    .lg\:pr-8 {
      padding-right: 2rem;
    }
  
    .lg\:pb-8 {
      padding-bottom: 2rem;
    }
  
    .lg\:pl-8 {
      padding-left: 2rem;
    }
  
    .lg\:pt-px {
      padding-top: 1px;
    }
  
    .lg\:pr-px {
      padding-right: 1px;
    }
  
    .lg\:pb-px {
      padding-bottom: 1px;
    }
  
    .lg\:pl-px {
      padding-left: 1px;
    }
  
    .lg\:pointer-events-none {
      pointer-events: none;
    }
  
    .lg\:pointer-events-auto {
      pointer-events: auto;
    }
  
    .lg\:static {
      position: static;
    }
  
    .lg\:fixed {
      position: fixed;
    }
  
    .lg\:absolute {
      position: absolute;
    }
  
    .lg\:relative {
      position: relative;
    }
  
    .lg\:pin-none {
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
    }
  
    .lg\:pin {
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
    }
  
    .lg\:pin-y {
      top: 0;
      bottom: 0;
    }
  
    .lg\:pin-x {
      right: 0;
      left: 0;
    }
  
    .lg\:pin-t {
      top: 0;
    }
  
    .lg\:pin-r {
      right: 0;
    }
  
    .lg\:pin-b {
      bottom: 0;
    }
  
    .lg\:pin-l {
      left: 0;
    }
  
    .lg\:resize-none {
      resize: none;
    }
  
    .lg\:resize-y {
      resize: vertical;
    }
  
    .lg\:resize-x {
      resize: horizontal;
    }
  
    .lg\:resize {
      resize: both;
    }
  
    .lg\:shadow {
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
    }
  
    .lg\:shadow-md {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08);
    }
  
    .lg\:shadow-lg {
      box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
    }
  
    .lg\:shadow-inner {
      box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, .06);
    }
  
    .lg\:shadow-none {
      box-shadow: none;
    }
  
    .lg\:text-left {
      text-align: left;
    }
  
    .lg\:text-center {
      text-align: center;
    }
  
    .lg\:text-right {
      text-align: right;
    }
  
    .lg\:text-justify {
      text-align: justify;
    }
  
    .lg\:text-transparent {
      color: transparent;
    }
  
    .lg\:text-black {
      color: #22292f;
    }
  
    .lg\:text-grey-darkest {
      color: #3d4852;
    }
  
    .lg\:text-grey-darker {
      color: #606f7b;
    }
  
    .lg\:text-grey-dark {
      color: #8795a1;
    }
  
    .lg\:text-grey {
      color: #b8c2cc;
    }
  
    .lg\:text-grey-light {
      color: #dae1e7;
    }
  
    .lg\:text-grey-lighter {
      color: #f1f5f8;
    }
  
    .lg\:text-grey-lightest {
      color: #f8fafc;
    }
  
    .lg\:text-white {
      color: #fff;
    }
  
    .lg\:text-red-darkest {
      color: #3b0d0c;
    }
  
    .lg\:text-red-darker {
      color: #621b18;
    }
  
    .lg\:text-red-dark {
      color: #cc1f1a;
    }
  
    .lg\:text-red {
      color: #e3342f;
    }
  
    .lg\:text-red-light {
      color: #ef5753;
    }
  
    .lg\:text-red-lighter {
      color: #f9acaa;
    }
  
    .lg\:text-red-lightest {
      color: #fcebea;
    }
  
    .lg\:text-orange-darkest {
      color: #462a16;
    }
  
    .lg\:text-orange-darker {
      color: #613b1f;
    }
  
    .lg\:text-orange-dark {
      color: #de751f;
    }
  
    .lg\:text-orange {
      color: #f6993f;
    }
  
    .lg\:text-orange-light {
      color: #faad63;
    }
  
    .lg\:text-orange-lighter {
      color: #fcd9b6;
    }
  
    .lg\:text-orange-lightest {
      color: #fff5eb;
    }
  
    .lg\:text-yellow-darkest {
      color: #453411;
    }
  
    .lg\:text-yellow-darker {
      color: #684f1d;
    }
  
    .lg\:text-yellow-dark {
      color: #f2d024;
    }
  
    .lg\:text-yellow {
      color: #ffed4a;
    }
  
    .lg\:text-yellow-light {
      color: #fff382;
    }
  
    .lg\:text-yellow-lighter {
      color: #fff9c2;
    }
  
    .lg\:text-yellow-lightest {
      color: #fcfbeb;
    }
  
    .lg\:text-green-darkest {
      color: #0f2f21;
    }
  
    .lg\:text-green-darker {
      color: #1a4731;
    }
  
    .lg\:text-green-dark {
      color: #1f9d55;
    }
  
    .lg\:text-green {
      color: #38c172;
    }
  
    .lg\:text-green-light {
      color: #51d88a;
    }
  
    .lg\:text-green-lighter {
      color: #a2f5bf;
    }
  
    .lg\:text-green-lightest {
      color: #e3fcec;
    }
  
    .lg\:text-teal-darkest {
      color: #0d3331;
    }
  
    .lg\:text-teal-darker {
      color: #20504f;
    }
  
    .lg\:text-teal-dark {
      color: #38a89d;
    }
  
    .lg\:text-teal {
      color: #4dc0b5;
    }
  
    .lg\:text-teal-light {
      color: #64d5ca;
    }
  
    .lg\:text-teal-lighter {
      color: #a0f0ed;
    }
  
    .lg\:text-teal-lightest {
      color: #e8fffe;
    }
  
    .lg\:text-blue-darkest {
      color: #12283a;
    }
  
    .lg\:text-blue-darker {
      color: #1c3d5a;
    }
  
    .lg\:text-blue-dark {
      color: #2779bd;
    }
  
    .lg\:text-blue {
      color: #3490dc;
    }
  
    .lg\:text-blue-light {
      color: #6cb2eb;
    }
  
    .lg\:text-blue-lighter {
      color: #bcdefa;
    }
  
    .lg\:text-blue-lightest {
      color: #eff8ff;
    }
  
    .lg\:text-indigo-darkest {
      color: #191e38;
    }
  
    .lg\:text-indigo-darker {
      color: #2f365f;
    }
  
    .lg\:text-indigo-dark {
      color: #5661b3;
    }
  
    .lg\:text-indigo {
      color: #6574cd;
    }
  
    .lg\:text-indigo-light {
      color: #7886d7;
    }
  
    .lg\:text-indigo-lighter {
      color: #b2b7ff;
    }
  
    .lg\:text-indigo-lightest {
      color: #e6e8ff;
    }
  
    .lg\:text-purple-darkest {
      color: #21183c;
    }
  
    .lg\:text-purple-darker {
      color: #382b5f;
    }
  
    .lg\:text-purple-dark {
      color: #794acf;
    }
  
    .lg\:text-purple {
      color: #9561e2;
    }
  
    .lg\:text-purple-light {
      color: #a779e9;
    }
  
    .lg\:text-purple-lighter {
      color: #d6bbfc;
    }
  
    .lg\:text-purple-lightest {
      color: #f3ebff;
    }
  
    .lg\:text-pink-darkest {
      color: #451225;
    }
  
    .lg\:text-pink-darker {
      color: #6f213f;
    }
  
    .lg\:text-pink-dark {
      color: #eb5286;
    }
  
    .lg\:text-pink {
      color: #f66d9b;
    }
  
    .lg\:text-pink-light {
      color: #fa7ea8;
    }
  
    .lg\:text-pink-lighter {
      color: #ffbbca;
    }
  
    .lg\:text-pink-lightest {
      color: #ffebef;
    }
  
    .lg\:hover\:text-transparent:hover {
      color: transparent;
    }
  
    .lg\:hover\:text-black:hover {
      color: #22292f;
    }
  
    .lg\:hover\:text-grey-darkest:hover {
      color: #3d4852;
    }
  
    .lg\:hover\:text-grey-darker:hover {
      color: #606f7b;
    }
  
    .lg\:hover\:text-grey-dark:hover {
      color: #8795a1;
    }
  
    .lg\:hover\:text-grey:hover {
      color: #b8c2cc;
    }
  
    .lg\:hover\:text-grey-light:hover {
      color: #dae1e7;
    }
  
    .lg\:hover\:text-grey-lighter:hover {
      color: #f1f5f8;
    }
  
    .lg\:hover\:text-grey-lightest:hover {
      color: #f8fafc;
    }
  
    .lg\:hover\:text-white:hover {
      color: #fff;
    }
  
    .lg\:hover\:text-red-darkest:hover {
      color: #3b0d0c;
    }
  
    .lg\:hover\:text-red-darker:hover {
      color: #621b18;
    }
  
    .lg\:hover\:text-red-dark:hover {
      color: #cc1f1a;
    }
  
    .lg\:hover\:text-red:hover {
      color: #e3342f;
    }
  
    .lg\:hover\:text-red-light:hover {
      color: #ef5753;
    }
  
    .lg\:hover\:text-red-lighter:hover {
      color: #f9acaa;
    }
  
    .lg\:hover\:text-red-lightest:hover {
      color: #fcebea;
    }
  
    .lg\:hover\:text-orange-darkest:hover {
      color: #462a16;
    }
  
    .lg\:hover\:text-orange-darker:hover {
      color: #613b1f;
    }
  
    .lg\:hover\:text-orange-dark:hover {
      color: #de751f;
    }
  
    .lg\:hover\:text-orange:hover {
      color: #f6993f;
    }
  
    .lg\:hover\:text-orange-light:hover {
      color: #faad63;
    }
  
    .lg\:hover\:text-orange-lighter:hover {
      color: #fcd9b6;
    }
  
    .lg\:hover\:text-orange-lightest:hover {
      color: #fff5eb;
    }
  
    .lg\:hover\:text-yellow-darkest:hover {
      color: #453411;
    }
  
    .lg\:hover\:text-yellow-darker:hover {
      color: #684f1d;
    }
  
    .lg\:hover\:text-yellow-dark:hover {
      color: #f2d024;
    }
  
    .lg\:hover\:text-yellow:hover {
      color: #ffed4a;
    }
  
    .lg\:hover\:text-yellow-light:hover {
      color: #fff382;
    }
  
    .lg\:hover\:text-yellow-lighter:hover {
      color: #fff9c2;
    }
  
    .lg\:hover\:text-yellow-lightest:hover {
      color: #fcfbeb;
    }
  
    .lg\:hover\:text-green-darkest:hover {
      color: #0f2f21;
    }
  
    .lg\:hover\:text-green-darker:hover {
      color: #1a4731;
    }
  
    .lg\:hover\:text-green-dark:hover {
      color: #1f9d55;
    }
  
    .lg\:hover\:text-green:hover {
      color: #38c172;
    }
  
    .lg\:hover\:text-green-light:hover {
      color: #51d88a;
    }
  
    .lg\:hover\:text-green-lighter:hover {
      color: #a2f5bf;
    }
  
    .lg\:hover\:text-green-lightest:hover {
      color: #e3fcec;
    }
  
    .lg\:hover\:text-teal-darkest:hover {
      color: #0d3331;
    }
  
    .lg\:hover\:text-teal-darker:hover {
      color: #20504f;
    }
  
    .lg\:hover\:text-teal-dark:hover {
      color: #38a89d;
    }
  
    .lg\:hover\:text-teal:hover {
      color: #4dc0b5;
    }
  
    .lg\:hover\:text-teal-light:hover {
      color: #64d5ca;
    }
  
    .lg\:hover\:text-teal-lighter:hover {
      color: #a0f0ed;
    }
  
    .lg\:hover\:text-teal-lightest:hover {
      color: #e8fffe;
    }
  
    .lg\:hover\:text-blue-darkest:hover {
      color: #12283a;
    }
  
    .lg\:hover\:text-blue-darker:hover {
      color: #1c3d5a;
    }
  
    .lg\:hover\:text-blue-dark:hover {
      color: #2779bd;
    }
  
    .lg\:hover\:text-blue:hover {
      color: #3490dc;
    }
  
    .lg\:hover\:text-blue-light:hover {
      color: #6cb2eb;
    }
  
    .lg\:hover\:text-blue-lighter:hover {
      color: #bcdefa;
    }
  
    .lg\:hover\:text-blue-lightest:hover {
      color: #eff8ff;
    }
  
    .lg\:hover\:text-indigo-darkest:hover {
      color: #191e38;
    }
  
    .lg\:hover\:text-indigo-darker:hover {
      color: #2f365f;
    }
  
    .lg\:hover\:text-indigo-dark:hover {
      color: #5661b3;
    }
  
    .lg\:hover\:text-indigo:hover {
      color: #6574cd;
    }
  
    .lg\:hover\:text-indigo-light:hover {
      color: #7886d7;
    }
  
    .lg\:hover\:text-indigo-lighter:hover {
      color: #b2b7ff;
    }
  
    .lg\:hover\:text-indigo-lightest:hover {
      color: #e6e8ff;
    }
  
    .lg\:hover\:text-purple-darkest:hover {
      color: #21183c;
    }
  
    .lg\:hover\:text-purple-darker:hover {
      color: #382b5f;
    }
  
    .lg\:hover\:text-purple-dark:hover {
      color: #794acf;
    }
  
    .lg\:hover\:text-purple:hover {
      color: #9561e2;
    }
  
    .lg\:hover\:text-purple-light:hover {
      color: #a779e9;
    }
  
    .lg\:hover\:text-purple-lighter:hover {
      color: #d6bbfc;
    }
  
    .lg\:hover\:text-purple-lightest:hover {
      color: #f3ebff;
    }
  
    .lg\:hover\:text-pink-darkest:hover {
      color: #451225;
    }
  
    .lg\:hover\:text-pink-darker:hover {
      color: #6f213f;
    }
  
    .lg\:hover\:text-pink-dark:hover {
      color: #eb5286;
    }
  
    .lg\:hover\:text-pink:hover {
      color: #f66d9b;
    }
  
    .lg\:hover\:text-pink-light:hover {
      color: #fa7ea8;
    }
  
    .lg\:hover\:text-pink-lighter:hover {
      color: #ffbbca;
    }
  
    .lg\:hover\:text-pink-lightest:hover {
      color: #ffebef;
    }
  
    .lg\:text-xs {
      font-size: .75rem;
    }
  
    .lg\:text-sm {
      font-size: .875rem;
    }
  
    .lg\:text-base {
      font-size: 1rem;
    }
  
    .lg\:text-lg {
      font-size: 1.125rem;
    }
  
    .lg\:text-xl {
      font-size: 1.25rem;
    }
  
    .lg\:text-2xl {
      font-size: 1.5rem;
    }
  
    .lg\:text-3xl {
      font-size: 1.875rem;
    }
  
    .lg\:text-4xl {
      font-size: 2.25rem;
    }
  
    .lg\:text-5xl {
      font-size: 3rem;
    }
  
    .lg\:italic {
      font-style: italic;
    }
  
    .lg\:roman {
      font-style: normal;
    }
  
    .lg\:uppercase {
      text-transform: uppercase;
    }
  
    .lg\:lowercase {
      text-transform: lowercase;
    }
  
    .lg\:capitalize {
      text-transform: capitalize;
    }
  
    .lg\:normal-case {
      text-transform: none;
    }
  
    .lg\:underline {
      text-decoration: underline;
    }
  
    .lg\:line-through {
      text-decoration: line-through;
    }
  
    .lg\:no-underline {
      text-decoration: none;
    }
  
    .lg\:antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  
    .lg\:subpixel-antialiased {
      -webkit-font-smoothing: auto;
      -moz-osx-font-smoothing: auto;
    }
  
    .lg\:hover\:italic:hover {
      font-style: italic;
    }
  
    .lg\:hover\:roman:hover {
      font-style: normal;
    }
  
    .lg\:hover\:uppercase:hover {
      text-transform: uppercase;
    }
  
    .lg\:hover\:lowercase:hover {
      text-transform: lowercase;
    }
  
    .lg\:hover\:capitalize:hover {
      text-transform: capitalize;
    }
  
    .lg\:hover\:normal-case:hover {
      text-transform: none;
    }
  
    .lg\:hover\:underline:hover {
      text-decoration: underline;
    }
  
    .lg\:hover\:line-through:hover {
      text-decoration: line-through;
    }
  
    .lg\:hover\:no-underline:hover {
      text-decoration: none;
    }
  
    .lg\:hover\:antialiased:hover {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  
    .lg\:hover\:subpixel-antialiased:hover {
      -webkit-font-smoothing: auto;
      -moz-osx-font-smoothing: auto;
    }
  
    .lg\:tracking-tight {
      letter-spacing: -0.05em;
    }
  
    .lg\:tracking-normal {
      letter-spacing: 0;
    }
  
    .lg\:tracking-wide {
      letter-spacing: .05em;
    }
  
    .lg\:select-none {
      user-select: none;
    }
  
    .lg\:select-text {
      user-select: text;
    }
  
    .lg\:align-baseline {
      vertical-align: baseline;
    }
  
    .lg\:align-top {
      vertical-align: top;
    }
  
    .lg\:align-middle {
      vertical-align: middle;
    }
  
    .lg\:align-bottom {
      vertical-align: bottom;
    }
  
    .lg\:align-text-top {
      vertical-align: text-top;
    }
  
    .lg\:align-text-bottom {
      vertical-align: text-bottom;
    }
  
    .lg\:visible {
      visibility: visible;
    }
  
    .lg\:invisible {
      visibility: hidden;
    }
  
    .lg\:whitespace-normal {
      white-space: normal;
    }
  
    .lg\:whitespace-no-wrap {
      white-space: nowrap;
    }
  
    .lg\:whitespace-pre {
      white-space: pre;
    }
  
    .lg\:whitespace-pre-line {
      white-space: pre-line;
    }
  
    .lg\:whitespace-pre-wrap {
      white-space: pre-wrap;
    }
  
    .lg\:break-words {
      word-wrap: break-word;
    }
  
    .lg\:break-normal {
      word-wrap: normal;
    }
  
    .lg\:truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
  
    .lg\:w-1 {
      width: .25rem;
    }
  
    .lg\:w-2 {
      width: .5rem;
    }
  
    .lg\:w-3 {
      width: .75rem;
    }
  
    .lg\:w-4 {
      width: 1rem;
    }
  
    .lg\:w-6 {
      width: 1.5rem;
    }
  
    .lg\:w-8 {
      width: 2rem;
    }
  
    .lg\:w-10 {
      width: 2.5rem;
    }
  
    .lg\:w-12 {
      width: 3rem;
    }
  
    .lg\:w-16 {
      width: 4rem;
    }
  
    .lg\:w-24 {
      width: 6rem;
    }
  
    .lg\:w-32 {
      width: 8rem;
    }
  
    .lg\:w-48 {
      width: 12rem;
    }
  
    .lg\:w-64 {
      width: 16rem;
    }
  
    .lg\:w-auto {
      width: auto;
    }
  
    .lg\:w-px {
      width: 1px;
    }
  
    .lg\:w-1\/2 {
      width: 50%;
    }
  
    .lg\:w-1\/3 {
      width: 33.33333%;
    }
  
    .lg\:w-2\/3 {
      width: 66.66667%;
    }
  
    .lg\:w-1\/4 {
      width: 25%;
    }
  
    .lg\:w-3\/4 {
      width: 75%;
    }
  
    .lg\:w-1\/5 {
      width: 20%;
    }
  
    .lg\:w-2\/5 {
      width: 40%;
    }
  
    .lg\:w-3\/5 {
      width: 60%;
    }
  
    .lg\:w-4\/5 {
      width: 80%;
    }
  
    .lg\:w-1\/6 {
      width: 16.66667%;
    }
  
    .lg\:w-5\/6 {
      width: 83.33333%;
    }
  
    .lg\:w-full {
      width: 100%;
    }
  
    .lg\:w-screen {
      width: 100vw;
    }
  
    .lg\:z-0 {
      z-index: 0;
    }
  
    .lg\:z-10 {
      z-index: 10;
    }
  
    .lg\:z-20 {
      z-index: 20;
    }
  
    .lg\:z-30 {
      z-index: 30;
    }
  
    .lg\:z-40 {
      z-index: 40;
    }
  
    .lg\:z-50 {
      z-index: 50;
    }
  
    .lg\:z-auto {
      z-index: auto;
    }
  }
  
  @media (min-width: 1200px) {
    .xl\:list-reset {
      list-style: none;
      padding: 0;
    }
  
    .xl\:appearance-none {
      appearance: none;
    }
  
    .xl\:bg-fixed {
      background-attachment: fixed;
    }
  
    .xl\:bg-local {
      background-attachment: local;
    }
  
    .xl\:bg-scroll {
      background-attachment: scroll;
    }
  
    .xl\:bg-transparent {
      background-color: transparent;
    }
  
    .xl\:bg-black {
      background-color: #22292f;
    }
  
    .xl\:bg-grey-darkest {
      background-color: #3d4852;
    }
  
    .xl\:bg-grey-darker {
      background-color: #606f7b;
    }
  
    .xl\:bg-grey-dark {
      background-color: #8795a1;
    }
  
    .xl\:bg-grey {
      background-color: #b8c2cc;
    }
  
    .xl\:bg-grey-light {
      background-color: #dae1e7;
    }
  
    .xl\:bg-grey-lighter {
      background-color: #f1f5f8;
    }
  
    .xl\:bg-grey-lightest {
      background-color: #f8fafc;
    }
  
    .xl\:bg-white {
      background-color: #fff;
    }
  
    .xl\:bg-red-darkest {
      background-color: #3b0d0c;
    }
  
    .xl\:bg-red-darker {
      background-color: #621b18;
    }
  
    .xl\:bg-red-dark {
      background-color: #cc1f1a;
    }
  
    .xl\:bg-red {
      background-color: #e3342f;
    }
  
    .xl\:bg-red-light {
      background-color: #ef5753;
    }
  
    .xl\:bg-red-lighter {
      background-color: #f9acaa;
    }
  
    .xl\:bg-red-lightest {
      background-color: #fcebea;
    }
  
    .xl\:bg-orange-darkest {
      background-color: #462a16;
    }
  
    .xl\:bg-orange-darker {
      background-color: #613b1f;
    }
  
    .xl\:bg-orange-dark {
      background-color: #de751f;
    }
  
    .xl\:bg-orange {
      background-color: #f6993f;
    }
  
    .xl\:bg-orange-light {
      background-color: #faad63;
    }
  
    .xl\:bg-orange-lighter {
      background-color: #fcd9b6;
    }
  
    .xl\:bg-orange-lightest {
      background-color: #fff5eb;
    }
  
    .xl\:bg-yellow-darkest {
      background-color: #453411;
    }
  
    .xl\:bg-yellow-darker {
      background-color: #684f1d;
    }
  
    .xl\:bg-yellow-dark {
      background-color: #f2d024;
    }
  
    .xl\:bg-yellow {
      background-color: #ffed4a;
    }
  
    .xl\:bg-yellow-light {
      background-color: #fff382;
    }
  
    .xl\:bg-yellow-lighter {
      background-color: #fff9c2;
    }
  
    .xl\:bg-yellow-lightest {
      background-color: #fcfbeb;
    }
  
    .xl\:bg-green-darkest {
      background-color: #0f2f21;
    }
  
    .xl\:bg-green-darker {
      background-color: #1a4731;
    }
  
    .xl\:bg-green-dark {
      background-color: #1f9d55;
    }
  
    .xl\:bg-green {
      background-color: #38c172;
    }
  
    .xl\:bg-green-light {
      background-color: #51d88a;
    }
  
    .xl\:bg-green-lighter {
      background-color: #a2f5bf;
    }
  
    .xl\:bg-green-lightest {
      background-color: #e3fcec;
    }
  
    .xl\:bg-teal-darkest {
      background-color: #0d3331;
    }
  
    .xl\:bg-teal-darker {
      background-color: #20504f;
    }
  
    .xl\:bg-teal-dark {
      background-color: #38a89d;
    }
  
    .xl\:bg-teal {
      background-color: #4dc0b5;
    }
  
    .xl\:bg-teal-light {
      background-color: #64d5ca;
    }
  
    .xl\:bg-teal-lighter {
      background-color: #a0f0ed;
    }
  
    .xl\:bg-teal-lightest {
      background-color: #e8fffe;
    }
  
    .xl\:bg-blue-darkest {
      background-color: #12283a;
    }
  
    .xl\:bg-blue-darker {
      background-color: #1c3d5a;
    }
  
    .xl\:bg-blue-dark {
      background-color: #2779bd;
    }
  
    .xl\:bg-blue {
      background-color: #3490dc;
    }
  
    .xl\:bg-blue-light {
      background-color: #6cb2eb;
    }
  
    .xl\:bg-blue-lighter {
      background-color: #bcdefa;
    }
  
    .xl\:bg-blue-lightest {
      background-color: #eff8ff;
    }
  
    .xl\:bg-indigo-darkest {
      background-color: #191e38;
    }
  
    .xl\:bg-indigo-darker {
      background-color: #2f365f;
    }
  
    .xl\:bg-indigo-dark {
      background-color: #5661b3;
    }
  
    .xl\:bg-indigo {
      background-color: #6574cd;
    }
  
    .xl\:bg-indigo-light {
      background-color: #7886d7;
    }
  
    .xl\:bg-indigo-lighter {
      background-color: #b2b7ff;
    }
  
    .xl\:bg-indigo-lightest {
      background-color: #e6e8ff;
    }
  
    .xl\:bg-purple-darkest {
      background-color: #21183c;
    }
  
    .xl\:bg-purple-darker {
      background-color: #382b5f;
    }
  
    .xl\:bg-purple-dark {
      background-color: #794acf;
    }
  
    .xl\:bg-purple {
      background-color: #9561e2;
    }
  
    .xl\:bg-purple-light {
      background-color: #a779e9;
    }
  
    .xl\:bg-purple-lighter {
      background-color: #d6bbfc;
    }
  
    .xl\:bg-purple-lightest {
      background-color: #f3ebff;
    }
  
    .xl\:bg-pink-darkest {
      background-color: #451225;
    }
  
    .xl\:bg-pink-darker {
      background-color: #6f213f;
    }
  
    .xl\:bg-pink-dark {
      background-color: #eb5286;
    }
  
    .xl\:bg-pink {
      background-color: #f66d9b;
    }
  
    .xl\:bg-pink-light {
      background-color: #fa7ea8;
    }
  
    .xl\:bg-pink-lighter {
      background-color: #ffbbca;
    }
  
    .xl\:bg-pink-lightest {
      background-color: #ffebef;
    }
  
    .xl\:hover\:bg-transparent:hover {
      background-color: transparent;
    }
  
    .xl\:hover\:bg-black:hover {
      background-color: #22292f;
    }
  
    .xl\:hover\:bg-grey-darkest:hover {
      background-color: #3d4852;
    }
  
    .xl\:hover\:bg-grey-darker:hover {
      background-color: #606f7b;
    }
  
    .xl\:hover\:bg-grey-dark:hover {
      background-color: #8795a1;
    }
  
    .xl\:hover\:bg-grey:hover {
      background-color: #b8c2cc;
    }
  
    .xl\:hover\:bg-grey-light:hover {
      background-color: #dae1e7;
    }
  
    .xl\:hover\:bg-grey-lighter:hover {
      background-color: #f1f5f8;
    }
  
    .xl\:hover\:bg-grey-lightest:hover {
      background-color: #f8fafc;
    }
  
    .xl\:hover\:bg-white:hover {
      background-color: #fff;
    }
  
    .xl\:hover\:bg-red-darkest:hover {
      background-color: #3b0d0c;
    }
  
    .xl\:hover\:bg-red-darker:hover {
      background-color: #621b18;
    }
  
    .xl\:hover\:bg-red-dark:hover {
      background-color: #cc1f1a;
    }
  
    .xl\:hover\:bg-red:hover {
      background-color: #e3342f;
    }
  
    .xl\:hover\:bg-red-light:hover {
      background-color: #ef5753;
    }
  
    .xl\:hover\:bg-red-lighter:hover {
      background-color: #f9acaa;
    }
  
    .xl\:hover\:bg-red-lightest:hover {
      background-color: #fcebea;
    }
  
    .xl\:hover\:bg-orange-darkest:hover {
      background-color: #462a16;
    }
  
    .xl\:hover\:bg-orange-darker:hover {
      background-color: #613b1f;
    }
  
    .xl\:hover\:bg-orange-dark:hover {
      background-color: #de751f;
    }
  
    .xl\:hover\:bg-orange:hover {
      background-color: #f6993f;
    }
  
    .xl\:hover\:bg-orange-light:hover {
      background-color: #faad63;
    }
  
    .xl\:hover\:bg-orange-lighter:hover {
      background-color: #fcd9b6;
    }
  
    .xl\:hover\:bg-orange-lightest:hover {
      background-color: #fff5eb;
    }
  
    .xl\:hover\:bg-yellow-darkest:hover {
      background-color: #453411;
    }
  
    .xl\:hover\:bg-yellow-darker:hover {
      background-color: #684f1d;
    }
  
    .xl\:hover\:bg-yellow-dark:hover {
      background-color: #f2d024;
    }
  
    .xl\:hover\:bg-yellow:hover {
      background-color: #ffed4a;
    }
  
    .xl\:hover\:bg-yellow-light:hover {
      background-color: #fff382;
    }
  
    .xl\:hover\:bg-yellow-lighter:hover {
      background-color: #fff9c2;
    }
  
    .xl\:hover\:bg-yellow-lightest:hover {
      background-color: #fcfbeb;
    }
  
    .xl\:hover\:bg-green-darkest:hover {
      background-color: #0f2f21;
    }
  
    .xl\:hover\:bg-green-darker:hover {
      background-color: #1a4731;
    }
  
    .xl\:hover\:bg-green-dark:hover {
      background-color: #1f9d55;
    }
  
    .xl\:hover\:bg-green:hover {
      background-color: #38c172;
    }
  
    .xl\:hover\:bg-green-light:hover {
      background-color: #51d88a;
    }
  
    .xl\:hover\:bg-green-lighter:hover {
      background-color: #a2f5bf;
    }
  
    .xl\:hover\:bg-green-lightest:hover {
      background-color: #e3fcec;
    }
  
    .xl\:hover\:bg-teal-darkest:hover {
      background-color: #0d3331;
    }
  
    .xl\:hover\:bg-teal-darker:hover {
      background-color: #20504f;
    }
  
    .xl\:hover\:bg-teal-dark:hover {
      background-color: #38a89d;
    }
  
    .xl\:hover\:bg-teal:hover {
      background-color: #4dc0b5;
    }
  
    .xl\:hover\:bg-teal-light:hover {
      background-color: #64d5ca;
    }
  
    .xl\:hover\:bg-teal-lighter:hover {
      background-color: #a0f0ed;
    }
  
    .xl\:hover\:bg-teal-lightest:hover {
      background-color: #e8fffe;
    }
  
    .xl\:hover\:bg-blue-darkest:hover {
      background-color: #12283a;
    }
  
    .xl\:hover\:bg-blue-darker:hover {
      background-color: #1c3d5a;
    }
  
    .xl\:hover\:bg-blue-dark:hover {
      background-color: #2779bd;
    }
  
    .xl\:hover\:bg-blue:hover {
      background-color: #3490dc;
    }
  
    .xl\:hover\:bg-blue-light:hover {
      background-color: #6cb2eb;
    }
  
    .xl\:hover\:bg-blue-lighter:hover {
      background-color: #bcdefa;
    }
  
    .xl\:hover\:bg-blue-lightest:hover {
      background-color: #eff8ff;
    }
  
    .xl\:hover\:bg-indigo-darkest:hover {
      background-color: #191e38;
    }
  
    .xl\:hover\:bg-indigo-darker:hover {
      background-color: #2f365f;
    }
  
    .xl\:hover\:bg-indigo-dark:hover {
      background-color: #5661b3;
    }
  
    .xl\:hover\:bg-indigo:hover {
      background-color: #6574cd;
    }
  
    .xl\:hover\:bg-indigo-light:hover {
      background-color: #7886d7;
    }
  
    .xl\:hover\:bg-indigo-lighter:hover {
      background-color: #b2b7ff;
    }
  
    .xl\:hover\:bg-indigo-lightest:hover {
      background-color: #e6e8ff;
    }
  
    .xl\:hover\:bg-purple-darkest:hover {
      background-color: #21183c;
    }
  
    .xl\:hover\:bg-purple-darker:hover {
      background-color: #382b5f;
    }
  
    .xl\:hover\:bg-purple-dark:hover {
      background-color: #794acf;
    }
  
    .xl\:hover\:bg-purple:hover {
      background-color: #9561e2;
    }
  
    .xl\:hover\:bg-purple-light:hover {
      background-color: #a779e9;
    }
  
    .xl\:hover\:bg-purple-lighter:hover {
      background-color: #d6bbfc;
    }
  
    .xl\:hover\:bg-purple-lightest:hover {
      background-color: #f3ebff;
    }
  
    .xl\:hover\:bg-pink-darkest:hover {
      background-color: #451225;
    }
  
    .xl\:hover\:bg-pink-darker:hover {
      background-color: #6f213f;
    }
  
    .xl\:hover\:bg-pink-dark:hover {
      background-color: #eb5286;
    }
  
    .xl\:hover\:bg-pink:hover {
      background-color: #f66d9b;
    }
  
    .xl\:hover\:bg-pink-light:hover {
      background-color: #fa7ea8;
    }
  
    .xl\:hover\:bg-pink-lighter:hover {
      background-color: #ffbbca;
    }
  
    .xl\:hover\:bg-pink-lightest:hover {
      background-color: #ffebef;
    }
  
    .xl\:bg-bottom {
      background-position: bottom;
    }
  
    .xl\:bg-center {
      background-position: center;
    }
  
    .xl\:bg-left {
      background-position: left;
    }
  
    .xl\:bg-left-bottom {
      background-position: left bottom;
    }
  
    .xl\:bg-left-top {
      background-position: left top;
    }
  
    .xl\:bg-right {
      background-position: right;
    }
  
    .xl\:bg-right-bottom {
      background-position: right bottom;
    }
  
    .xl\:bg-right-top {
      background-position: right top;
    }
  
    .xl\:bg-top {
      background-position: top;
    }
  
    .xl\:bg-repeat {
      background-repeat: repeat;
    }
  
    .xl\:bg-no-repeat {
      background-repeat: no-repeat;
    }
  
    .xl\:bg-repeat-x {
      background-repeat: repeat-x;
    }
  
    .xl\:bg-repeat-y {
      background-repeat: repeat-y;
    }
  
    .xl\:bg-cover {
      background-size: cover;
    }
  
    .xl\:bg-contain {
      background-size: contain;
    }
  
    .xl\:border-transparent {
      border-color: transparent;
    }
  
    .xl\:border-black {
      border-color: #22292f;
    }
  
    .xl\:border-grey-darkest {
      border-color: #3d4852;
    }
  
    .xl\:border-grey-darker {
      border-color: #606f7b;
    }
  
    .xl\:border-grey-dark {
      border-color: #8795a1;
    }
  
    .xl\:border-grey {
      border-color: #b8c2cc;
    }
  
    .xl\:border-grey-light {
      border-color: #dae1e7;
    }
  
    .xl\:border-grey-lighter {
      border-color: #f1f5f8;
    }
  
    .xl\:border-grey-lightest {
      border-color: #f8fafc;
    }
  
    .xl\:border-white {
      border-color: #fff;
    }
  
    .xl\:border-red-darkest {
      border-color: #3b0d0c;
    }
  
    .xl\:border-red-darker {
      border-color: #621b18;
    }
  
    .xl\:border-red-dark {
      border-color: #cc1f1a;
    }
  
    .xl\:border-red {
      border-color: #e3342f;
    }
  
    .xl\:border-red-light {
      border-color: #ef5753;
    }
  
    .xl\:border-red-lighter {
      border-color: #f9acaa;
    }
  
    .xl\:border-red-lightest {
      border-color: #fcebea;
    }
  
    .xl\:border-orange-darkest {
      border-color: #462a16;
    }
  
    .xl\:border-orange-darker {
      border-color: #613b1f;
    }
  
    .xl\:border-orange-dark {
      border-color: #de751f;
    }
  
    .xl\:border-orange {
      border-color: #f6993f;
    }
  
    .xl\:border-orange-light {
      border-color: #faad63;
    }
  
    .xl\:border-orange-lighter {
      border-color: #fcd9b6;
    }
  
    .xl\:border-orange-lightest {
      border-color: #fff5eb;
    }
  
    .xl\:border-yellow-darkest {
      border-color: #453411;
    }
  
    .xl\:border-yellow-darker {
      border-color: #684f1d;
    }
  
    .xl\:border-yellow-dark {
      border-color: #f2d024;
    }
  
    .xl\:border-yellow {
      border-color: #ffed4a;
    }
  
    .xl\:border-yellow-light {
      border-color: #fff382;
    }
  
    .xl\:border-yellow-lighter {
      border-color: #fff9c2;
    }
  
    .xl\:border-yellow-lightest {
      border-color: #fcfbeb;
    }
  
    .xl\:border-green-darkest {
      border-color: #0f2f21;
    }
  
    .xl\:border-green-darker {
      border-color: #1a4731;
    }
  
    .xl\:border-green-dark {
      border-color: #1f9d55;
    }
  
    .xl\:border-green {
      border-color: #38c172;
    }
  
    .xl\:border-green-light {
      border-color: #51d88a;
    }
  
    .xl\:border-green-lighter {
      border-color: #a2f5bf;
    }
  
    .xl\:border-green-lightest {
      border-color: #e3fcec;
    }
  
    .xl\:border-teal-darkest {
      border-color: #0d3331;
    }
  
    .xl\:border-teal-darker {
      border-color: #20504f;
    }
  
    .xl\:border-teal-dark {
      border-color: #38a89d;
    }
  
    .xl\:border-teal {
      border-color: #4dc0b5;
    }
  
    .xl\:border-teal-light {
      border-color: #64d5ca;
    }
  
    .xl\:border-teal-lighter {
      border-color: #a0f0ed;
    }
  
    .xl\:border-teal-lightest {
      border-color: #e8fffe;
    }
  
    .xl\:border-blue-darkest {
      border-color: #12283a;
    }
  
    .xl\:border-blue-darker {
      border-color: #1c3d5a;
    }
  
    .xl\:border-blue-dark {
      border-color: #2779bd;
    }
  
    .xl\:border-blue {
      border-color: #3490dc;
    }
  
    .xl\:border-blue-light {
      border-color: #6cb2eb;
    }
  
    .xl\:border-blue-lighter {
      border-color: #bcdefa;
    }
  
    .xl\:border-blue-lightest {
      border-color: #eff8ff;
    }
  
    .xl\:border-indigo-darkest {
      border-color: #191e38;
    }
  
    .xl\:border-indigo-darker {
      border-color: #2f365f;
    }
  
    .xl\:border-indigo-dark {
      border-color: #5661b3;
    }
  
    .xl\:border-indigo {
      border-color: #6574cd;
    }
  
    .xl\:border-indigo-light {
      border-color: #7886d7;
    }
  
    .xl\:border-indigo-lighter {
      border-color: #b2b7ff;
    }
  
    .xl\:border-indigo-lightest {
      border-color: #e6e8ff;
    }
  
    .xl\:border-purple-darkest {
      border-color: #21183c;
    }
  
    .xl\:border-purple-darker {
      border-color: #382b5f;
    }
  
    .xl\:border-purple-dark {
      border-color: #794acf;
    }
  
    .xl\:border-purple {
      border-color: #9561e2;
    }
  
    .xl\:border-purple-light {
      border-color: #a779e9;
    }
  
    .xl\:border-purple-lighter {
      border-color: #d6bbfc;
    }
  
    .xl\:border-purple-lightest {
      border-color: #f3ebff;
    }
  
    .xl\:border-pink-darkest {
      border-color: #451225;
    }
  
    .xl\:border-pink-darker {
      border-color: #6f213f;
    }
  
    .xl\:border-pink-dark {
      border-color: #eb5286;
    }
  
    .xl\:border-pink {
      border-color: #f66d9b;
    }
  
    .xl\:border-pink-light {
      border-color: #fa7ea8;
    }
  
    .xl\:border-pink-lighter {
      border-color: #ffbbca;
    }
  
    .xl\:border-pink-lightest {
      border-color: #ffebef;
    }
  
    .xl\:hover\:border-transparent:hover {
      border-color: transparent;
    }
  
    .xl\:hover\:border-black:hover {
      border-color: #22292f;
    }
  
    .xl\:hover\:border-grey-darkest:hover {
      border-color: #3d4852;
    }
  
    .xl\:hover\:border-grey-darker:hover {
      border-color: #606f7b;
    }
  
    .xl\:hover\:border-grey-dark:hover {
      border-color: #8795a1;
    }
  
    .xl\:hover\:border-grey:hover {
      border-color: #b8c2cc;
    }
  
    .xl\:hover\:border-grey-light:hover {
      border-color: #dae1e7;
    }
  
    .xl\:hover\:border-grey-lighter:hover {
      border-color: #f1f5f8;
    }
  
    .xl\:hover\:border-grey-lightest:hover {
      border-color: #f8fafc;
    }
  
    .xl\:hover\:border-white:hover {
      border-color: #fff;
    }
  
    .xl\:hover\:border-red-darkest:hover {
      border-color: #3b0d0c;
    }
  
    .xl\:hover\:border-red-darker:hover {
      border-color: #621b18;
    }
  
    .xl\:hover\:border-red-dark:hover {
      border-color: #cc1f1a;
    }
  
    .xl\:hover\:border-red:hover {
      border-color: #e3342f;
    }
  
    .xl\:hover\:border-red-light:hover {
      border-color: #ef5753;
    }
  
    .xl\:hover\:border-red-lighter:hover {
      border-color: #f9acaa;
    }
  
    .xl\:hover\:border-red-lightest:hover {
      border-color: #fcebea;
    }
  
    .xl\:hover\:border-orange-darkest:hover {
      border-color: #462a16;
    }
  
    .xl\:hover\:border-orange-darker:hover {
      border-color: #613b1f;
    }
  
    .xl\:hover\:border-orange-dark:hover {
      border-color: #de751f;
    }
  
    .xl\:hover\:border-orange:hover {
      border-color: #f6993f;
    }
  
    .xl\:hover\:border-orange-light:hover {
      border-color: #faad63;
    }
  
    .xl\:hover\:border-orange-lighter:hover {
      border-color: #fcd9b6;
    }
  
    .xl\:hover\:border-orange-lightest:hover {
      border-color: #fff5eb;
    }
  
    .xl\:hover\:border-yellow-darkest:hover {
      border-color: #453411;
    }
  
    .xl\:hover\:border-yellow-darker:hover {
      border-color: #684f1d;
    }
  
    .xl\:hover\:border-yellow-dark:hover {
      border-color: #f2d024;
    }
  
    .xl\:hover\:border-yellow:hover {
      border-color: #ffed4a;
    }
  
    .xl\:hover\:border-yellow-light:hover {
      border-color: #fff382;
    }
  
    .xl\:hover\:border-yellow-lighter:hover {
      border-color: #fff9c2;
    }
  
    .xl\:hover\:border-yellow-lightest:hover {
      border-color: #fcfbeb;
    }
  
    .xl\:hover\:border-green-darkest:hover {
      border-color: #0f2f21;
    }
  
    .xl\:hover\:border-green-darker:hover {
      border-color: #1a4731;
    }
  
    .xl\:hover\:border-green-dark:hover {
      border-color: #1f9d55;
    }
  
    .xl\:hover\:border-green:hover {
      border-color: #38c172;
    }
  
    .xl\:hover\:border-green-light:hover {
      border-color: #51d88a;
    }
  
    .xl\:hover\:border-green-lighter:hover {
      border-color: #a2f5bf;
    }
  
    .xl\:hover\:border-green-lightest:hover {
      border-color: #e3fcec;
    }
  
    .xl\:hover\:border-teal-darkest:hover {
      border-color: #0d3331;
    }
  
    .xl\:hover\:border-teal-darker:hover {
      border-color: #20504f;
    }
  
    .xl\:hover\:border-teal-dark:hover {
      border-color: #38a89d;
    }
  
    .xl\:hover\:border-teal:hover {
      border-color: #4dc0b5;
    }
  
    .xl\:hover\:border-teal-light:hover {
      border-color: #64d5ca;
    }
  
    .xl\:hover\:border-teal-lighter:hover {
      border-color: #a0f0ed;
    }
  
    .xl\:hover\:border-teal-lightest:hover {
      border-color: #e8fffe;
    }
  
    .xl\:hover\:border-blue-darkest:hover {
      border-color: #12283a;
    }
  
    .xl\:hover\:border-blue-darker:hover {
      border-color: #1c3d5a;
    }
  
    .xl\:hover\:border-blue-dark:hover {
      border-color: #2779bd;
    }
  
    .xl\:hover\:border-blue:hover {
      border-color: #3490dc;
    }
  
    .xl\:hover\:border-blue-light:hover {
      border-color: #6cb2eb;
    }
  
    .xl\:hover\:border-blue-lighter:hover {
      border-color: #bcdefa;
    }
  
    .xl\:hover\:border-blue-lightest:hover {
      border-color: #eff8ff;
    }
  
    .xl\:hover\:border-indigo-darkest:hover {
      border-color: #191e38;
    }
  
    .xl\:hover\:border-indigo-darker:hover {
      border-color: #2f365f;
    }
  
    .xl\:hover\:border-indigo-dark:hover {
      border-color: #5661b3;
    }
  
    .xl\:hover\:border-indigo:hover {
      border-color: #6574cd;
    }
  
    .xl\:hover\:border-indigo-light:hover {
      border-color: #7886d7;
    }
  
    .xl\:hover\:border-indigo-lighter:hover {
      border-color: #b2b7ff;
    }
  
    .xl\:hover\:border-indigo-lightest:hover {
      border-color: #e6e8ff;
    }
  
    .xl\:hover\:border-purple-darkest:hover {
      border-color: #21183c;
    }
  
    .xl\:hover\:border-purple-darker:hover {
      border-color: #382b5f;
    }
  
    .xl\:hover\:border-purple-dark:hover {
      border-color: #794acf;
    }
  
    .xl\:hover\:border-purple:hover {
      border-color: #9561e2;
    }
  
    .xl\:hover\:border-purple-light:hover {
      border-color: #a779e9;
    }
  
    .xl\:hover\:border-purple-lighter:hover {
      border-color: #d6bbfc;
    }
  
    .xl\:hover\:border-purple-lightest:hover {
      border-color: #f3ebff;
    }
  
    .xl\:hover\:border-pink-darkest:hover {
      border-color: #451225;
    }
  
    .xl\:hover\:border-pink-darker:hover {
      border-color: #6f213f;
    }
  
    .xl\:hover\:border-pink-dark:hover {
      border-color: #eb5286;
    }
  
    .xl\:hover\:border-pink:hover {
      border-color: #f66d9b;
    }
  
    .xl\:hover\:border-pink-light:hover {
      border-color: #fa7ea8;
    }
  
    .xl\:hover\:border-pink-lighter:hover {
      border-color: #ffbbca;
    }
  
    .xl\:hover\:border-pink-lightest:hover {
      border-color: #ffebef;
    }
  
    .xl\:rounded-none {
      border-radius: 0;
    }
  
    .xl\:rounded-sm {
      border-radius: .125rem;
    }
  
    .xl\:rounded {
      border-radius: .25rem;
    }
  
    .xl\:rounded-lg {
      border-radius: .5rem;
    }
  
    .xl\:rounded-full {
      border-radius: 9999px;
    }
  
    .xl\:rounded-t-none {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  
    .xl\:rounded-r-none {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }
  
    .xl\:rounded-b-none {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
  
    .xl\:rounded-l-none {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }
  
    .xl\:rounded-t-sm {
      border-top-left-radius: .125rem;
      border-top-right-radius: .125rem;
    }
  
    .xl\:rounded-r-sm {
      border-top-right-radius: .125rem;
      border-bottom-right-radius: .125rem;
    }
  
    .xl\:rounded-b-sm {
      border-bottom-right-radius: .125rem;
      border-bottom-left-radius: .125rem;
    }
  
    .xl\:rounded-l-sm {
      border-top-left-radius: .125rem;
      border-bottom-left-radius: .125rem;
    }
  
    .xl\:rounded-t {
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem;
    }
  
    .xl\:rounded-r {
      border-top-right-radius: .25rem;
      border-bottom-right-radius: .25rem;
    }
  
    .xl\:rounded-b {
      border-bottom-right-radius: .25rem;
      border-bottom-left-radius: .25rem;
    }
  
    .xl\:rounded-l {
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem;
    }
  
    .xl\:rounded-t-lg {
      border-top-left-radius: .5rem;
      border-top-right-radius: .5rem;
    }
  
    .xl\:rounded-r-lg {
      border-top-right-radius: .5rem;
      border-bottom-right-radius: .5rem;
    }
  
    .xl\:rounded-b-lg {
      border-bottom-right-radius: .5rem;
      border-bottom-left-radius: .5rem;
    }
  
    .xl\:rounded-l-lg {
      border-top-left-radius: .5rem;
      border-bottom-left-radius: .5rem;
    }
  
    .xl\:rounded-t-full {
      border-top-left-radius: 9999px;
      border-top-right-radius: 9999px;
    }
  
    .xl\:rounded-r-full {
      border-top-right-radius: 9999px;
      border-bottom-right-radius: 9999px;
    }
  
    .xl\:rounded-b-full {
      border-bottom-right-radius: 9999px;
      border-bottom-left-radius: 9999px;
    }
  
    .xl\:rounded-l-full {
      border-top-left-radius: 9999px;
      border-bottom-left-radius: 9999px;
    }
  
    .xl\:rounded-tl-none {
      border-top-left-radius: 0;
    }
  
    .xl\:rounded-tr-none {
      border-top-right-radius: 0;
    }
  
    .xl\:rounded-br-none {
      border-bottom-right-radius: 0;
    }
  
    .xl\:rounded-bl-none {
      border-bottom-left-radius: 0;
    }
  
    .xl\:rounded-tl-sm {
      border-top-left-radius: .125rem;
    }
  
    .xl\:rounded-tr-sm {
      border-top-right-radius: .125rem;
    }
  
    .xl\:rounded-br-sm {
      border-bottom-right-radius: .125rem;
    }
  
    .xl\:rounded-bl-sm {
      border-bottom-left-radius: .125rem;
    }
  
    .xl\:rounded-tl {
      border-top-left-radius: .25rem;
    }
  
    .xl\:rounded-tr {
      border-top-right-radius: .25rem;
    }
  
    .xl\:rounded-br {
      border-bottom-right-radius: .25rem;
    }
  
    .xl\:rounded-bl {
      border-bottom-left-radius: .25rem;
    }
  
    .xl\:rounded-tl-lg {
      border-top-left-radius: .5rem;
    }
  
    .xl\:rounded-tr-lg {
      border-top-right-radius: .5rem;
    }
  
    .xl\:rounded-br-lg {
      border-bottom-right-radius: .5rem;
    }
  
    .xl\:rounded-bl-lg {
      border-bottom-left-radius: .5rem;
    }
  
    .xl\:rounded-tl-full {
      border-top-left-radius: 9999px;
    }
  
    .xl\:rounded-tr-full {
      border-top-right-radius: 9999px;
    }
  
    .xl\:rounded-br-full {
      border-bottom-right-radius: 9999px;
    }
  
    .xl\:rounded-bl-full {
      border-bottom-left-radius: 9999px;
    }
  
    .xl\:border-solid {
      border-style: solid;
    }
  
    .xl\:border-dashed {
      border-style: dashed;
    }
  
    .xl\:border-dotted {
      border-style: dotted;
    }
  
    .xl\:border-none {
      border-style: none;
    }
  
    .xl\:border-0 {
      border-width: 0;
    }
  
    .xl\:border-2 {
      border-width: 2px;
    }
  
    .xl\:border-4 {
      border-width: 4px;
    }
  
    .xl\:border-8 {
      border-width: 8px;
    }
  
    .xl\:border {
      border-width: 1px;
    }
  
    .xl\:border-t-0 {
      border-top-width: 0;
    }
  
    .xl\:border-r-0 {
      border-right-width: 0;
    }
  
    .xl\:border-b-0 {
      border-bottom-width: 0;
    }
  
    .xl\:border-l-0 {
      border-left-width: 0;
    }
  
    .xl\:border-t-2 {
      border-top-width: 2px;
    }
  
    .xl\:border-r-2 {
      border-right-width: 2px;
    }
  
    .xl\:border-b-2 {
      border-bottom-width: 2px;
    }
  
    .xl\:border-l-2 {
      border-left-width: 2px;
    }
  
    .xl\:border-t-4 {
      border-top-width: 4px;
    }
  
    .xl\:border-r-4 {
      border-right-width: 4px;
    }
  
    .xl\:border-b-4 {
      border-bottom-width: 4px;
    }
  
    .xl\:border-l-4 {
      border-left-width: 4px;
    }
  
    .xl\:border-t-8 {
      border-top-width: 8px;
    }
  
    .xl\:border-r-8 {
      border-right-width: 8px;
    }
  
    .xl\:border-b-8 {
      border-bottom-width: 8px;
    }
  
    .xl\:border-l-8 {
      border-left-width: 8px;
    }
  
    .xl\:border-t {
      border-top-width: 1px;
    }
  
    .xl\:border-r {
      border-right-width: 1px;
    }
  
    .xl\:border-b {
      border-bottom-width: 1px;
    }
  
    .xl\:border-l {
      border-left-width: 1px;
    }
  
    .xl\:cursor-auto {
      cursor: auto;
    }
  
    .xl\:cursor-default {
      cursor: default;
    }
  
    .xl\:cursor-pointer {
      cursor: pointer;
    }
  
    .xl\:cursor-not-allowed {
      cursor: not-allowed;
    }
  
    .xl\:block {
      display: block;
    }
  
    .xl\:inline-block {
      display: inline-block;
    }
  
    .xl\:inline {
      display: inline;
    }
  
    .xl\:table {
      display: table;
    }
  
    .xl\:table-row {
      display: table-row;
    }
  
    .xl\:table-cell {
      display: table-cell;
    }
  
    .xl\:hidden {
      display: none;
    }
  
    .xl\:flex {
      display: flex;
    }
  
    .xl\:inline-flex {
      display: inline-flex;
    }
  
    .xl\:flex-row {
      flex-direction: row;
    }
  
    .xl\:flex-row-reverse {
      flex-direction: row-reverse;
    }
  
    .xl\:flex-col {
      flex-direction: column;
    }
  
    .xl\:flex-col-reverse {
      flex-direction: column-reverse;
    }
  
    .xl\:flex-wrap {
      flex-wrap: wrap;
    }
  
    .xl\:flex-wrap-reverse {
      flex-wrap: wrap-reverse;
    }
  
    .xl\:flex-no-wrap {
      flex-wrap: nowrap;
    }
  
    .xl\:items-start {
      align-items: flex-start;
    }
  
    .xl\:items-end {
      align-items: flex-end;
    }
  
    .xl\:items-center {
      align-items: center;
    }
  
    .xl\:items-baseline {
      align-items: baseline;
    }
  
    .xl\:items-stretch {
      align-items: stretch;
    }
  
    .xl\:self-auto {
      align-self: auto;
    }
  
    .xl\:self-start {
      align-self: flex-start;
    }
  
    .xl\:self-end {
      align-self: flex-end;
    }
  
    .xl\:self-center {
      align-self: center;
    }
  
    .xl\:self-stretch {
      align-self: stretch;
    }
  
    .xl\:justify-start {
      justify-content: flex-start;
    }
  
    .xl\:justify-end {
      justify-content: flex-end;
    }
  
    .xl\:justify-center {
      justify-content: center;
    }
  
    .xl\:justify-between {
      justify-content: space-between;
    }
  
    .xl\:justify-around {
      justify-content: space-around;
    }
  
    .xl\:content-center {
      align-content: center;
    }
  
    .xl\:content-start {
      align-content: flex-start;
    }
  
    .xl\:content-end {
      align-content: flex-end;
    }
  
    .xl\:content-between {
      align-content: space-between;
    }
  
    .xl\:content-around {
      align-content: space-around;
    }
  
    .xl\:flex-1 {
      flex: 1;
    }
  
    .xl\:flex-auto {
      flex: auto;
    }
  
    .xl\:flex-initial {
      flex: initial;
    }
  
    .xl\:flex-none {
      flex: none;
    }
  
    .xl\:flex-grow {
      flex-grow: 1;
    }
  
    .xl\:flex-shrink {
      flex-shrink: 1;
    }
  
    .xl\:flex-no-grow {
      flex-grow: 0;
    }
  
    .xl\:flex-no-shrink {
      flex-shrink: 0;
    }
  
    .xl\:float-right {
      float: right;
    }
  
    .xl\:float-left {
      float: left;
    }
  
    .xl\:float-none {
      float: none;
    }
  
    .xl\:clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
  
    .xl\:font-sans {
      font-family: system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
    }
  
    .xl\:font-serif {
      font-family: Constantia, Lucida Bright, Lucidabright, Lucida Serif, Lucida, DejaVu Serif, Bitstream Vera Serif, Liberation Serif, Georgia, serif;
    }
  
    .xl\:font-mono {
      font-family: Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
    }
  
    .xl\:font-hairline {
      font-weight: 100;
    }
  
    .xl\:font-thin {
      font-weight: 200;
    }
  
    .xl\:font-light {
      font-weight: 300;
    }
  
    .xl\:font-normal {
      font-weight: 400;
    }
  
    .xl\:font-medium {
      font-weight: 500;
    }
  
    .xl\:font-semibold {
      font-weight: 600;
    }
  
    .xl\:font-bold {
      font-weight: 700;
    }
  
    .xl\:font-extrabold {
      font-weight: 800;
    }
  
    .xl\:font-black {
      font-weight: 900;
    }
  
    .xl\:hover\:font-hairline:hover {
      font-weight: 100;
    }
  
    .xl\:hover\:font-thin:hover {
      font-weight: 200;
    }
  
    .xl\:hover\:font-light:hover {
      font-weight: 300;
    }
  
    .xl\:hover\:font-normal:hover {
      font-weight: 400;
    }
  
    .xl\:hover\:font-medium:hover {
      font-weight: 500;
    }
  
    .xl\:hover\:font-semibold:hover {
      font-weight: 600;
    }
  
    .xl\:hover\:font-bold:hover {
      font-weight: 700;
    }
  
    .xl\:hover\:font-extrabold:hover {
      font-weight: 800;
    }
  
    .xl\:hover\:font-black:hover {
      font-weight: 900;
    }
  
    .xl\:h-1 {
      height: .25rem;
    }
  
    .xl\:h-2 {
      height: .5rem;
    }
  
    .xl\:h-3 {
      height: .75rem;
    }
  
    .xl\:h-4 {
      height: 1rem;
    }
  
    .xl\:h-6 {
      height: 1.5rem;
    }
  
    .xl\:h-8 {
      height: 2rem;
    }
  
    .xl\:h-10 {
      height: 2.5rem;
    }
  
    .xl\:h-12 {
      height: 3rem;
    }
  
    .xl\:h-16 {
      height: 4rem;
    }
  
    .xl\:h-24 {
      height: 6rem;
    }
  
    .xl\:h-32 {
      height: 8rem;
    }
  
    .xl\:h-48 {
      height: 12rem;
    }
  
    .xl\:h-64 {
      height: 16rem;
    }
  
    .xl\:h-auto {
      height: auto;
    }
  
    .xl\:h-px {
      height: 1px;
    }
  
    .xl\:h-full {
      height: 100%;
    }
  
    .xl\:h-screen {
      height: 100vh;
    }
  
    .xl\:leading-none {
      line-height: 1;
    }
  
    .xl\:leading-tight {
      line-height: 1.25;
    }
  
    .xl\:leading-normal {
      line-height: 1.5;
    }
  
    .xl\:leading-loose {
      line-height: 2;
    }
  
    .xl\:m-0 {
      margin: 0;
    }
  
    .xl\:m-1 {
      margin: .25rem;
    }
  
    .xl\:m-2 {
      margin: .5rem;
    }
  
    .xl\:m-3 {
      margin: .75rem;
    }
  
    .xl\:m-4 {
      margin: 1rem;
    }
  
    .xl\:m-6 {
      margin: 1.5rem;
    }
  
    .xl\:m-8 {
      margin: 2rem;
    }
  
    .xl\:m-auto {
      margin: auto;
    }
  
    .xl\:m-px {
      margin: 1px;
    }
  
    .xl\:my-0 {
      margin-top: 0;
      margin-bottom: 0;
    }
  
    .xl\:mx-0 {
      margin-left: 0;
      margin-right: 0;
    }
  
    .xl\:my-1 {
      margin-top: .25rem;
      margin-bottom: .25rem;
    }
  
    .xl\:mx-1 {
      margin-left: .25rem;
      margin-right: .25rem;
    }
  
    .xl\:my-2 {
      margin-top: .5rem;
      margin-bottom: .5rem;
    }
  
    .xl\:mx-2 {
      margin-left: .5rem;
      margin-right: .5rem;
    }
  
    .xl\:my-3 {
      margin-top: .75rem;
      margin-bottom: .75rem;
    }
  
    .xl\:mx-3 {
      margin-left: .75rem;
      margin-right: .75rem;
    }
  
    .xl\:my-4 {
      margin-top: 1rem;
      margin-bottom: 1rem;
    }
  
    .xl\:mx-4 {
      margin-left: 1rem;
      margin-right: 1rem;
    }
  
    .xl\:my-6 {
      margin-top: 1.5rem;
      margin-bottom: 1.5rem;
    }
  
    .xl\:mx-6 {
      margin-left: 1.5rem;
      margin-right: 1.5rem;
    }
  
    .xl\:my-8 {
      margin-top: 2rem;
      margin-bottom: 2rem;
    }
  
    .xl\:mx-8 {
      margin-left: 2rem;
      margin-right: 2rem;
    }
  
    .xl\:my-auto {
      margin-top: auto;
      margin-bottom: auto;
    }
  
    .xl\:mx-auto {
      margin-left: auto;
      margin-right: auto;
    }
  
    .xl\:my-px {
      margin-top: 1px;
      margin-bottom: 1px;
    }
  
    .xl\:mx-px {
      margin-left: 1px;
      margin-right: 1px;
    }
  
    .xl\:mt-0 {
      margin-top: 0;
    }
  
    .xl\:mr-0 {
      margin-right: 0;
    }
  
    .xl\:mb-0 {
      margin-bottom: 0;
    }
  
    .xl\:ml-0 {
      margin-left: 0;
    }
  
    .xl\:mt-1 {
      margin-top: .25rem;
    }
  
    .xl\:mr-1 {
      margin-right: .25rem;
    }
  
    .xl\:mb-1 {
      margin-bottom: .25rem;
    }
  
    .xl\:ml-1 {
      margin-left: .25rem;
    }
  
    .xl\:mt-2 {
      margin-top: .5rem;
    }
  
    .xl\:mr-2 {
      margin-right: .5rem;
    }
  
    .xl\:mb-2 {
      margin-bottom: .5rem;
    }
  
    .xl\:ml-2 {
      margin-left: .5rem;
    }
  
    .xl\:mt-3 {
      margin-top: .75rem;
    }
  
    .xl\:mr-3 {
      margin-right: .75rem;
    }
  
    .xl\:mb-3 {
      margin-bottom: .75rem;
    }
  
    .xl\:ml-3 {
      margin-left: .75rem;
    }
  
    .xl\:mt-4 {
      margin-top: 1rem;
    }
  
    .xl\:mr-4 {
      margin-right: 1rem;
    }
  
    .xl\:mb-4 {
      margin-bottom: 1rem;
    }
  
    .xl\:ml-4 {
      margin-left: 1rem;
    }
  
    .xl\:mt-6 {
      margin-top: 1.5rem;
    }
  
    .xl\:mr-6 {
      margin-right: 1.5rem;
    }
  
    .xl\:mb-6 {
      margin-bottom: 1.5rem;
    }
  
    .xl\:ml-6 {
      margin-left: 1.5rem;
    }
  
    .xl\:mt-8 {
      margin-top: 2rem;
    }
  
    .xl\:mr-8 {
      margin-right: 2rem;
    }
  
    .xl\:mb-8 {
      margin-bottom: 2rem;
    }
  
    .xl\:ml-8 {
      margin-left: 2rem;
    }
  
    .xl\:mt-auto {
      margin-top: auto;
    }
  
    .xl\:mr-auto {
      margin-right: auto;
    }
  
    .xl\:mb-auto {
      margin-bottom: auto;
    }
  
    .xl\:ml-auto {
      margin-left: auto;
    }
  
    .xl\:mt-px {
      margin-top: 1px;
    }
  
    .xl\:mr-px {
      margin-right: 1px;
    }
  
    .xl\:mb-px {
      margin-bottom: 1px;
    }
  
    .xl\:ml-px {
      margin-left: 1px;
    }
  
    .xl\:max-h-full {
      max-height: 100%;
    }
  
    .xl\:max-h-screen {
      max-height: 100vh;
    }
  
    .xl\:max-w-xs {
      max-width: 20rem;
    }
  
    .xl\:max-w-sm {
      max-width: 30rem;
    }
  
    .xl\:max-w-md {
      max-width: 40rem;
    }
  
    .xl\:max-w-lg {
      max-width: 50rem;
    }
  
    .xl\:max-w-xl {
      max-width: 60rem;
    }
  
    .xl\:max-w-2xl {
      max-width: 70rem;
    }
  
    .xl\:max-w-3xl {
      max-width: 80rem;
    }
  
    .xl\:max-w-4xl {
      max-width: 90rem;
    }
  
    .xl\:max-w-5xl {
      max-width: 100rem;
    }
  
    .xl\:max-w-full {
      max-width: 100%;
    }
  
    .xl\:min-h-0 {
      min-height: 0;
    }
  
    .xl\:min-h-full {
      min-height: 100%;
    }
  
    .xl\:min-h-screen {
      min-height: 100vh;
    }
  
    .xl\:min-w-0 {
      min-width: 0;
    }
  
    .xl\:min-w-full {
      min-width: 100%;
    }
  
    .xl\:-m-0 {
      margin: 0;
    }
  
    .xl\:-m-1 {
      margin: -0.25rem;
    }
  
    .xl\:-m-2 {
      margin: -0.5rem;
    }
  
    .xl\:-m-3 {
      margin: -0.75rem;
    }
  
    .xl\:-m-4 {
      margin: -1rem;
    }
  
    .xl\:-m-6 {
      margin: -1.5rem;
    }
  
    .xl\:-m-8 {
      margin: -2rem;
    }
  
    .xl\:-m-px {
      margin: -1px;
    }
  
    .xl\:-my-0 {
      margin-top: 0;
      margin-bottom: 0;
    }
  
    .xl\:-mx-0 {
      margin-left: 0;
      margin-right: 0;
    }
  
    .xl\:-my-1 {
      margin-top: -0.25rem;
      margin-bottom: -0.25rem;
    }
  
    .xl\:-mx-1 {
      margin-left: -0.25rem;
      margin-right: -0.25rem;
    }
  
    .xl\:-my-2 {
      margin-top: -0.5rem;
      margin-bottom: -0.5rem;
    }
  
    .xl\:-mx-2 {
      margin-left: -0.5rem;
      margin-right: -0.5rem;
    }
  
    .xl\:-my-3 {
      margin-top: -0.75rem;
      margin-bottom: -0.75rem;
    }
  
    .xl\:-mx-3 {
      margin-left: -0.75rem;
      margin-right: -0.75rem;
    }
  
    .xl\:-my-4 {
      margin-top: -1rem;
      margin-bottom: -1rem;
    }
  
    .xl\:-mx-4 {
      margin-left: -1rem;
      margin-right: -1rem;
    }
  
    .xl\:-my-6 {
      margin-top: -1.5rem;
      margin-bottom: -1.5rem;
    }
  
    .xl\:-mx-6 {
      margin-left: -1.5rem;
      margin-right: -1.5rem;
    }
  
    .xl\:-my-8 {
      margin-top: -2rem;
      margin-bottom: -2rem;
    }
  
    .xl\:-mx-8 {
      margin-left: -2rem;
      margin-right: -2rem;
    }
  
    .xl\:-my-px {
      margin-top: -1px;
      margin-bottom: -1px;
    }
  
    .xl\:-mx-px {
      margin-left: -1px;
      margin-right: -1px;
    }
  
    .xl\:-mt-0 {
      margin-top: 0;
    }
  
    .xl\:-mr-0 {
      margin-right: 0;
    }
  
    .xl\:-mb-0 {
      margin-bottom: 0;
    }
  
    .xl\:-ml-0 {
      margin-left: 0;
    }
  
    .xl\:-mt-1 {
      margin-top: -0.25rem;
    }
  
    .xl\:-mr-1 {
      margin-right: -0.25rem;
    }
  
    .xl\:-mb-1 {
      margin-bottom: -0.25rem;
    }
  
    .xl\:-ml-1 {
      margin-left: -0.25rem;
    }
  
    .xl\:-mt-2 {
      margin-top: -0.5rem;
    }
  
    .xl\:-mr-2 {
      margin-right: -0.5rem;
    }
  
    .xl\:-mb-2 {
      margin-bottom: -0.5rem;
    }
  
    .xl\:-ml-2 {
      margin-left: -0.5rem;
    }
  
    .xl\:-mt-3 {
      margin-top: -0.75rem;
    }
  
    .xl\:-mr-3 {
      margin-right: -0.75rem;
    }
  
    .xl\:-mb-3 {
      margin-bottom: -0.75rem;
    }
  
    .xl\:-ml-3 {
      margin-left: -0.75rem;
    }
  
    .xl\:-mt-4 {
      margin-top: -1rem;
    }
  
    .xl\:-mr-4 {
      margin-right: -1rem;
    }
  
    .xl\:-mb-4 {
      margin-bottom: -1rem;
    }
  
    .xl\:-ml-4 {
      margin-left: -1rem;
    }
  
    .xl\:-mt-6 {
      margin-top: -1.5rem;
    }
  
    .xl\:-mr-6 {
      margin-right: -1.5rem;
    }
  
    .xl\:-mb-6 {
      margin-bottom: -1.5rem;
    }
  
    .xl\:-ml-6 {
      margin-left: -1.5rem;
    }
  
    .xl\:-mt-8 {
      margin-top: -2rem;
    }
  
    .xl\:-mr-8 {
      margin-right: -2rem;
    }
  
    .xl\:-mb-8 {
      margin-bottom: -2rem;
    }
  
    .xl\:-ml-8 {
      margin-left: -2rem;
    }
  
    .xl\:-mt-px {
      margin-top: -1px;
    }
  
    .xl\:-mr-px {
      margin-right: -1px;
    }
  
    .xl\:-mb-px {
      margin-bottom: -1px;
    }
  
    .xl\:-ml-px {
      margin-left: -1px;
    }
  
    .xl\:opacity-0 {
      opacity: 0;
    }
  
    .xl\:opacity-25 {
      opacity: .25;
    }
  
    .xl\:opacity-50 {
      opacity: .5;
    }
  
    .xl\:opacity-75 {
      opacity: .75;
    }
  
    .xl\:opacity-100 {
      opacity: 1;
    }
  
    .xl\:overflow-auto {
      overflow: auto;
    }
  
    .xl\:overflow-hidden {
      overflow: hidden;
    }
  
    .xl\:overflow-visible {
      overflow: visible;
    }
  
    .xl\:overflow-scroll {
      overflow: scroll;
    }
  
    .xl\:overflow-x-scroll {
      overflow-x: auto;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
  
    .xl\:overflow-y-scroll {
      overflow-y: auto;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
  
    .xl\:scrolling-touch {
      -webkit-overflow-scrolling: touch;
    }
  
    .xl\:scrolling-auto {
      -webkit-overflow-scrolling: auto;
    }
  
    .xl\:p-0 {
      padding: 0;
    }
  
    .xl\:p-1 {
      padding: .25rem;
    }
  
    .xl\:p-2 {
      padding: .5rem;
    }
  
    .xl\:p-3 {
      padding: .75rem;
    }
  
    .xl\:p-4 {
      padding: 1rem;
    }
  
    .xl\:p-6 {
      padding: 1.5rem;
    }
  
    .xl\:p-8 {
      padding: 2rem;
    }
  
    .xl\:p-px {
      padding: 1px;
    }
  
    .xl\:py-0 {
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .xl\:px-0 {
      padding-left: 0;
      padding-right: 0;
    }
  
    .xl\:py-1 {
      padding-top: .25rem;
      padding-bottom: .25rem;
    }
  
    .xl\:px-1 {
      padding-left: .25rem;
      padding-right: .25rem;
    }
  
    .xl\:py-2 {
      padding-top: .5rem;
      padding-bottom: .5rem;
    }
  
    .xl\:px-2 {
      padding-left: .5rem;
      padding-right: .5rem;
    }
  
    .xl\:py-3 {
      padding-top: .75rem;
      padding-bottom: .75rem;
    }
  
    .xl\:px-3 {
      padding-left: .75rem;
      padding-right: .75rem;
    }
  
    .xl\:py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
  
    .xl\:px-4 {
      padding-left: 1rem;
      padding-right: 1rem;
    }
  
    .xl\:py-6 {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }
  
    .xl\:px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }
  
    .xl\:py-8 {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }
  
    .xl\:px-8 {
      padding-left: 2rem;
      padding-right: 2rem;
    }
  
    .xl\:py-px {
      padding-top: 1px;
      padding-bottom: 1px;
    }
  
    .xl\:px-px {
      padding-left: 1px;
      padding-right: 1px;
    }
  
    .xl\:pt-0 {
      padding-top: 0;
    }
  
    .xl\:pr-0 {
      padding-right: 0;
    }
  
    .xl\:pb-0 {
      padding-bottom: 0;
    }
  
    .xl\:pl-0 {
      padding-left: 0;
    }
  
    .xl\:pt-1 {
      padding-top: .25rem;
    }
  
    .xl\:pr-1 {
      padding-right: .25rem;
    }
  
    .xl\:pb-1 {
      padding-bottom: .25rem;
    }
  
    .xl\:pl-1 {
      padding-left: .25rem;
    }
  
    .xl\:pt-2 {
      padding-top: .5rem;
    }
  
    .xl\:pr-2 {
      padding-right: .5rem;
    }
  
    .xl\:pb-2 {
      padding-bottom: .5rem;
    }
  
    .xl\:pl-2 {
      padding-left: .5rem;
    }
  
    .xl\:pt-3 {
      padding-top: .75rem;
    }
  
    .xl\:pr-3 {
      padding-right: .75rem;
    }
  
    .xl\:pb-3 {
      padding-bottom: .75rem;
    }
  
    .xl\:pl-3 {
      padding-left: .75rem;
    }
  
    .xl\:pt-4 {
      padding-top: 1rem;
    }
  
    .xl\:pr-4 {
      padding-right: 1rem;
    }
  
    .xl\:pb-4 {
      padding-bottom: 1rem;
    }
  
    .xl\:pl-4 {
      padding-left: 1rem;
    }
  
    .xl\:pt-6 {
      padding-top: 1.5rem;
    }
  
    .xl\:pr-6 {
      padding-right: 1.5rem;
    }
  
    .xl\:pb-6 {
      padding-bottom: 1.5rem;
    }
  
    .xl\:pl-6 {
      padding-left: 1.5rem;
    }
  
    .xl\:pt-8 {
      padding-top: 2rem;
    }
  
    .xl\:pr-8 {
      padding-right: 2rem;
    }
  
    .xl\:pb-8 {
      padding-bottom: 2rem;
    }
  
    .xl\:pl-8 {
      padding-left: 2rem;
    }
  
    .xl\:pt-px {
      padding-top: 1px;
    }
  
    .xl\:pr-px {
      padding-right: 1px;
    }
  
    .xl\:pb-px {
      padding-bottom: 1px;
    }
  
    .xl\:pl-px {
      padding-left: 1px;
    }
  
    .xl\:pointer-events-none {
      pointer-events: none;
    }
  
    .xl\:pointer-events-auto {
      pointer-events: auto;
    }
  
    .xl\:static {
      position: static;
    }
  
    .xl\:fixed {
      position: fixed;
    }
  
    .xl\:absolute {
      position: absolute;
    }
  
    .xl\:relative {
      position: relative;
    }
  
    .xl\:pin-none {
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
    }
  
    .xl\:pin {
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
    }
  
    .xl\:pin-y {
      top: 0;
      bottom: 0;
    }
  
    .xl\:pin-x {
      right: 0;
      left: 0;
    }
  
    .xl\:pin-t {
      top: 0;
    }
  
    .xl\:pin-r {
      right: 0;
    }
  
    .xl\:pin-b {
      bottom: 0;
    }
  
    .xl\:pin-l {
      left: 0;
    }
  
    .xl\:resize-none {
      resize: none;
    }
  
    .xl\:resize-y {
      resize: vertical;
    }
  
    .xl\:resize-x {
      resize: horizontal;
    }
  
    .xl\:resize {
      resize: both;
    }
  
    .xl\:shadow {
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
    }
  
    .xl\:shadow-md {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08);
    }
  
    .xl\:shadow-lg {
      box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
    }
  
    .xl\:shadow-inner {
      box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, .06);
    }
  
    .xl\:shadow-none {
      box-shadow: none;
    }
  
    .xl\:text-left {
      text-align: left;
    }
  
    .xl\:text-center {
      text-align: center;
    }
  
    .xl\:text-right {
      text-align: right;
    }
  
    .xl\:text-justify {
      text-align: justify;
    }
  
    .xl\:text-transparent {
      color: transparent;
    }
  
    .xl\:text-black {
      color: #22292f;
    }
  
    .xl\:text-grey-darkest {
      color: #3d4852;
    }
  
    .xl\:text-grey-darker {
      color: #606f7b;
    }
  
    .xl\:text-grey-dark {
      color: #8795a1;
    }
  
    .xl\:text-grey {
      color: #b8c2cc;
    }
  
    .xl\:text-grey-light {
      color: #dae1e7;
    }
  
    .xl\:text-grey-lighter {
      color: #f1f5f8;
    }
  
    .xl\:text-grey-lightest {
      color: #f8fafc;
    }
  
    .xl\:text-white {
      color: #fff;
    }
  
    .xl\:text-red-darkest {
      color: #3b0d0c;
    }
  
    .xl\:text-red-darker {
      color: #621b18;
    }
  
    .xl\:text-red-dark {
      color: #cc1f1a;
    }
  
    .xl\:text-red {
      color: #e3342f;
    }
  
    .xl\:text-red-light {
      color: #ef5753;
    }
  
    .xl\:text-red-lighter {
      color: #f9acaa;
    }
  
    .xl\:text-red-lightest {
      color: #fcebea;
    }
  
    .xl\:text-orange-darkest {
      color: #462a16;
    }
  
    .xl\:text-orange-darker {
      color: #613b1f;
    }
  
    .xl\:text-orange-dark {
      color: #de751f;
    }
  
    .xl\:text-orange {
      color: #f6993f;
    }
  
    .xl\:text-orange-light {
      color: #faad63;
    }
  
    .xl\:text-orange-lighter {
      color: #fcd9b6;
    }
  
    .xl\:text-orange-lightest {
      color: #fff5eb;
    }
  
    .xl\:text-yellow-darkest {
      color: #453411;
    }
  
    .xl\:text-yellow-darker {
      color: #684f1d;
    }
  
    .xl\:text-yellow-dark {
      color: #f2d024;
    }
  
    .xl\:text-yellow {
      color: #ffed4a;
    }
  
    .xl\:text-yellow-light {
      color: #fff382;
    }
  
    .xl\:text-yellow-lighter {
      color: #fff9c2;
    }
  
    .xl\:text-yellow-lightest {
      color: #fcfbeb;
    }
  
    .xl\:text-green-darkest {
      color: #0f2f21;
    }
  
    .xl\:text-green-darker {
      color: #1a4731;
    }
  
    .xl\:text-green-dark {
      color: #1f9d55;
    }
  
    .xl\:text-green {
      color: #38c172;
    }
  
    .xl\:text-green-light {
      color: #51d88a;
    }
  
    .xl\:text-green-lighter {
      color: #a2f5bf;
    }
  
    .xl\:text-green-lightest {
      color: #e3fcec;
    }
  
    .xl\:text-teal-darkest {
      color: #0d3331;
    }
  
    .xl\:text-teal-darker {
      color: #20504f;
    }
  
    .xl\:text-teal-dark {
      color: #38a89d;
    }
  
    .xl\:text-teal {
      color: #4dc0b5;
    }
  
    .xl\:text-teal-light {
      color: #64d5ca;
    }
  
    .xl\:text-teal-lighter {
      color: #a0f0ed;
    }
  
    .xl\:text-teal-lightest {
      color: #e8fffe;
    }
  
    .xl\:text-blue-darkest {
      color: #12283a;
    }
  
    .xl\:text-blue-darker {
      color: #1c3d5a;
    }
  
    .xl\:text-blue-dark {
      color: #2779bd;
    }
  
    .xl\:text-blue {
      color: #3490dc;
    }
  
    .xl\:text-blue-light {
      color: #6cb2eb;
    }
  
    .xl\:text-blue-lighter {
      color: #bcdefa;
    }
  
    .xl\:text-blue-lightest {
      color: #eff8ff;
    }
  
    .xl\:text-indigo-darkest {
      color: #191e38;
    }
  
    .xl\:text-indigo-darker {
      color: #2f365f;
    }
  
    .xl\:text-indigo-dark {
      color: #5661b3;
    }
  
    .xl\:text-indigo {
      color: #6574cd;
    }
  
    .xl\:text-indigo-light {
      color: #7886d7;
    }
  
    .xl\:text-indigo-lighter {
      color: #b2b7ff;
    }
  
    .xl\:text-indigo-lightest {
      color: #e6e8ff;
    }
  
    .xl\:text-purple-darkest {
      color: #21183c;
    }
  
    .xl\:text-purple-darker {
      color: #382b5f;
    }
  
    .xl\:text-purple-dark {
      color: #794acf;
    }
  
    .xl\:text-purple {
      color: #9561e2;
    }
  
    .xl\:text-purple-light {
      color: #a779e9;
    }
  
    .xl\:text-purple-lighter {
      color: #d6bbfc;
    }
  
    .xl\:text-purple-lightest {
      color: #f3ebff;
    }
  
    .xl\:text-pink-darkest {
      color: #451225;
    }
  
    .xl\:text-pink-darker {
      color: #6f213f;
    }
  
    .xl\:text-pink-dark {
      color: #eb5286;
    }
  
    .xl\:text-pink {
      color: #f66d9b;
    }
  
    .xl\:text-pink-light {
      color: #fa7ea8;
    }
  
    .xl\:text-pink-lighter {
      color: #ffbbca;
    }
  
    .xl\:text-pink-lightest {
      color: #ffebef;
    }
  
    .xl\:hover\:text-transparent:hover {
      color: transparent;
    }
  
    .xl\:hover\:text-black:hover {
      color: #22292f;
    }
  
    .xl\:hover\:text-grey-darkest:hover {
      color: #3d4852;
    }
  
    .xl\:hover\:text-grey-darker:hover {
      color: #606f7b;
    }
  
    .xl\:hover\:text-grey-dark:hover {
      color: #8795a1;
    }
  
    .xl\:hover\:text-grey:hover {
      color: #b8c2cc;
    }
  
    .xl\:hover\:text-grey-light:hover {
      color: #dae1e7;
    }
  
    .xl\:hover\:text-grey-lighter:hover {
      color: #f1f5f8;
    }
  
    .xl\:hover\:text-grey-lightest:hover {
      color: #f8fafc;
    }
  
    .xl\:hover\:text-white:hover {
      color: #fff;
    }
  
    .xl\:hover\:text-red-darkest:hover {
      color: #3b0d0c;
    }
  
    .xl\:hover\:text-red-darker:hover {
      color: #621b18;
    }
  
    .xl\:hover\:text-red-dark:hover {
      color: #cc1f1a;
    }
  
    .xl\:hover\:text-red:hover {
      color: #e3342f;
    }
  
    .xl\:hover\:text-red-light:hover {
      color: #ef5753;
    }
  
    .xl\:hover\:text-red-lighter:hover {
      color: #f9acaa;
    }
  
    .xl\:hover\:text-red-lightest:hover {
      color: #fcebea;
    }
  
    .xl\:hover\:text-orange-darkest:hover {
      color: #462a16;
    }
  
    .xl\:hover\:text-orange-darker:hover {
      color: #613b1f;
    }
  
    .xl\:hover\:text-orange-dark:hover {
      color: #de751f;
    }
  
    .xl\:hover\:text-orange:hover {
      color: #f6993f;
    }
  
    .xl\:hover\:text-orange-light:hover {
      color: #faad63;
    }
  
    .xl\:hover\:text-orange-lighter:hover {
      color: #fcd9b6;
    }
  
    .xl\:hover\:text-orange-lightest:hover {
      color: #fff5eb;
    }
  
    .xl\:hover\:text-yellow-darkest:hover {
      color: #453411;
    }
  
    .xl\:hover\:text-yellow-darker:hover {
      color: #684f1d;
    }
  
    .xl\:hover\:text-yellow-dark:hover {
      color: #f2d024;
    }
  
    .xl\:hover\:text-yellow:hover {
      color: #ffed4a;
    }
  
    .xl\:hover\:text-yellow-light:hover {
      color: #fff382;
    }
  
    .xl\:hover\:text-yellow-lighter:hover {
      color: #fff9c2;
    }
  
    .xl\:hover\:text-yellow-lightest:hover {
      color: #fcfbeb;
    }
  
    .xl\:hover\:text-green-darkest:hover {
      color: #0f2f21;
    }
  
    .xl\:hover\:text-green-darker:hover {
      color: #1a4731;
    }
  
    .xl\:hover\:text-green-dark:hover {
      color: #1f9d55;
    }
  
    .xl\:hover\:text-green:hover {
      color: #38c172;
    }
  
    .xl\:hover\:text-green-light:hover {
      color: #51d88a;
    }
  
    .xl\:hover\:text-green-lighter:hover {
      color: #a2f5bf;
    }
  
    .xl\:hover\:text-green-lightest:hover {
      color: #e3fcec;
    }
  
    .xl\:hover\:text-teal-darkest:hover {
      color: #0d3331;
    }
  
    .xl\:hover\:text-teal-darker:hover {
      color: #20504f;
    }
  
    .xl\:hover\:text-teal-dark:hover {
      color: #38a89d;
    }
  
    .xl\:hover\:text-teal:hover {
      color: #4dc0b5;
    }
  
    .xl\:hover\:text-teal-light:hover {
      color: #64d5ca;
    }
  
    .xl\:hover\:text-teal-lighter:hover {
      color: #a0f0ed;
    }
  
    .xl\:hover\:text-teal-lightest:hover {
      color: #e8fffe;
    }
  
    .xl\:hover\:text-blue-darkest:hover {
      color: #12283a;
    }
  
    .xl\:hover\:text-blue-darker:hover {
      color: #1c3d5a;
    }
  
    .xl\:hover\:text-blue-dark:hover {
      color: #2779bd;
    }
  
    .xl\:hover\:text-blue:hover {
      color: #3490dc;
    }
  
    .xl\:hover\:text-blue-light:hover {
      color: #6cb2eb;
    }
  
    .xl\:hover\:text-blue-lighter:hover {
      color: #bcdefa;
    }
  
    .xl\:hover\:text-blue-lightest:hover {
      color: #eff8ff;
    }
  
    .xl\:hover\:text-indigo-darkest:hover {
      color: #191e38;
    }
  
    .xl\:hover\:text-indigo-darker:hover {
      color: #2f365f;
    }
  
    .xl\:hover\:text-indigo-dark:hover {
      color: #5661b3;
    }
  
    .xl\:hover\:text-indigo:hover {
      color: #6574cd;
    }
  
    .xl\:hover\:text-indigo-light:hover {
      color: #7886d7;
    }
  
    .xl\:hover\:text-indigo-lighter:hover {
      color: #b2b7ff;
    }
  
    .xl\:hover\:text-indigo-lightest:hover {
      color: #e6e8ff;
    }
  
    .xl\:hover\:text-purple-darkest:hover {
      color: #21183c;
    }
  
    .xl\:hover\:text-purple-darker:hover {
      color: #382b5f;
    }
  
    .xl\:hover\:text-purple-dark:hover {
      color: #794acf;
    }
  
    .xl\:hover\:text-purple:hover {
      color: #9561e2;
    }
  
    .xl\:hover\:text-purple-light:hover {
      color: #a779e9;
    }
  
    .xl\:hover\:text-purple-lighter:hover {
      color: #d6bbfc;
    }
  
    .xl\:hover\:text-purple-lightest:hover {
      color: #f3ebff;
    }
  
    .xl\:hover\:text-pink-darkest:hover {
      color: #451225;
    }
  
    .xl\:hover\:text-pink-darker:hover {
      color: #6f213f;
    }
  
    .xl\:hover\:text-pink-dark:hover {
      color: #eb5286;
    }
  
    .xl\:hover\:text-pink:hover {
      color: #f66d9b;
    }
  
    .xl\:hover\:text-pink-light:hover {
      color: #fa7ea8;
    }
  
    .xl\:hover\:text-pink-lighter:hover {
      color: #ffbbca;
    }
  
    .xl\:hover\:text-pink-lightest:hover {
      color: #ffebef;
    }
  
    .xl\:text-xs {
      font-size: .75rem;
    }
  
    .xl\:text-sm {
      font-size: .875rem;
    }
  
    .xl\:text-base {
      font-size: 1rem;
    }
  
    .xl\:text-lg {
      font-size: 1.125rem;
    }
  
    .xl\:text-xl {
      font-size: 1.25rem;
    }
  
    .xl\:text-2xl {
      font-size: 1.5rem;
    }
  
    .xl\:text-3xl {
      font-size: 1.875rem;
    }
  
    .xl\:text-4xl {
      font-size: 2.25rem;
    }
  
    .xl\:text-5xl {
      font-size: 3rem;
    }
  
    .xl\:italic {
      font-style: italic;
    }
  
    .xl\:roman {
      font-style: normal;
    }
  
    .xl\:uppercase {
      text-transform: uppercase;
    }
  
    .xl\:lowercase {
      text-transform: lowercase;
    }
  
    .xl\:capitalize {
      text-transform: capitalize;
    }
  
    .xl\:normal-case {
      text-transform: none;
    }
  
    .xl\:underline {
      text-decoration: underline;
    }
  
    .xl\:line-through {
      text-decoration: line-through;
    }
  
    .xl\:no-underline {
      text-decoration: none;
    }
  
    .xl\:antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  
    .xl\:subpixel-antialiased {
      -webkit-font-smoothing: auto;
      -moz-osx-font-smoothing: auto;
    }
  
    .xl\:hover\:italic:hover {
      font-style: italic;
    }
  
    .xl\:hover\:roman:hover {
      font-style: normal;
    }
  
    .xl\:hover\:uppercase:hover {
      text-transform: uppercase;
    }
  
    .xl\:hover\:lowercase:hover {
      text-transform: lowercase;
    }
  
    .xl\:hover\:capitalize:hover {
      text-transform: capitalize;
    }
  
    .xl\:hover\:normal-case:hover {
      text-transform: none;
    }
  
    .xl\:hover\:underline:hover {
      text-decoration: underline;
    }
  
    .xl\:hover\:line-through:hover {
      text-decoration: line-through;
    }
  
    .xl\:hover\:no-underline:hover {
      text-decoration: none;
    }
  
    .xl\:hover\:antialiased:hover {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  
    .xl\:hover\:subpixel-antialiased:hover {
      -webkit-font-smoothing: auto;
      -moz-osx-font-smoothing: auto;
    }
  
    .xl\:tracking-tight {
      letter-spacing: -0.05em;
    }
  
    .xl\:tracking-normal {
      letter-spacing: 0;
    }
  
    .xl\:tracking-wide {
      letter-spacing: .05em;
    }
  
    .xl\:select-none {
      user-select: none;
    }
  
    .xl\:select-text {
      user-select: text;
    }
  
    .xl\:align-baseline {
      vertical-align: baseline;
    }
  
    .xl\:align-top {
      vertical-align: top;
    }
  
    .xl\:align-middle {
      vertical-align: middle;
    }
  
    .xl\:align-bottom {
      vertical-align: bottom;
    }
  
    .xl\:align-text-top {
      vertical-align: text-top;
    }
  
    .xl\:align-text-bottom {
      vertical-align: text-bottom;
    }
  
    .xl\:visible {
      visibility: visible;
    }
  
    .xl\:invisible {
      visibility: hidden;
    }
  
    .xl\:whitespace-normal {
      white-space: normal;
    }
  
    .xl\:whitespace-no-wrap {
      white-space: nowrap;
    }
  
    .xl\:whitespace-pre {
      white-space: pre;
    }
  
    .xl\:whitespace-pre-line {
      white-space: pre-line;
    }
  
    .xl\:whitespace-pre-wrap {
      white-space: pre-wrap;
    }
  
    .xl\:break-words {
      word-wrap: break-word;
    }
  
    .xl\:break-normal {
      word-wrap: normal;
    }
  
    .xl\:truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
  
    .xl\:w-1 {
      width: .25rem;
    }
  
    .xl\:w-2 {
      width: .5rem;
    }
  
    .xl\:w-3 {
      width: .75rem;
    }
  
    .xl\:w-4 {
      width: 1rem;
    }
  
    .xl\:w-6 {
      width: 1.5rem;
    }
  
    .xl\:w-8 {
      width: 2rem;
    }
  
    .xl\:w-10 {
      width: 2.5rem;
    }
  
    .xl\:w-12 {
      width: 3rem;
    }
  
    .xl\:w-16 {
      width: 4rem;
    }
  
    .xl\:w-24 {
      width: 6rem;
    }
  
    .xl\:w-32 {
      width: 8rem;
    }
  
    .xl\:w-48 {
      width: 12rem;
    }
  
    .xl\:w-64 {
      width: 16rem;
    }
  
    .xl\:w-auto {
      width: auto;
    }
  
    .xl\:w-px {
      width: 1px;
    }
  
    .xl\:w-1\/2 {
      width: 50%;
    }
  
    .xl\:w-1\/3 {
      width: 33.33333%;
    }
  
    .xl\:w-2\/3 {
      width: 66.66667%;
    }
  
    .xl\:w-1\/4 {
      width: 25%;
    }
  
    .xl\:w-3\/4 {
      width: 75%;
    }
  
    .xl\:w-1\/5 {
      width: 20%;
    }
  
    .xl\:w-2\/5 {
      width: 40%;
    }
  
    .xl\:w-3\/5 {
      width: 60%;
    }
  
    .xl\:w-4\/5 {
      width: 80%;
    }
  
    .xl\:w-1\/6 {
      width: 16.66667%;
    }
  
    .xl\:w-5\/6 {
      width: 83.33333%;
    }
  
    .xl\:w-full {
      width: 100%;
    }
  
    .xl\:w-screen {
      width: 100vw;
    }
  
    .xl\:z-0 {
      z-index: 0;
    }
  
    .xl\:z-10 {
      z-index: 10;
    }
  
    .xl\:z-20 {
      z-index: 20;
    }
  
    .xl\:z-30 {
      z-index: 30;
    }
  
    .xl\:z-40 {
      z-index: 40;
    }
  
    .xl\:z-50 {
      z-index: 50;
    }
  
    .xl\:z-auto {
      z-index: auto;
    }
  }
  
    </style>
</head>
<body class="font-custo">
    <div class="lg:fixed bg-white xl:fixed flex sm:block md:block lg:inline-flex xl:flex">
        <!--- Left Main Content To Be Designed Here -->
        <div class="flex-1 bg-image h-screen lg:border-r xl:border-r">
            <div class="w-full h-auto">
                <div class="w-full h-16 pt-8 pl-8">
                    <div class="flex mb-4">
                        <div class="w-1/2 h-12">
                            <h1 class="text-2xl mb-8 font-semibold leading-tight"><?php echo $fullname; ?></h1>
                        </div>
                        <div class="hamburger w-1/2 h-12 text-right md:hidden z-40">
                            <svg class="mr-8 fill-current text-grey-dark h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"/></svg>
                            <div class="menu lg:hidden z-50 bg-white border-2 border-grey pl-4 pb-4 pt-4 rounded-b-lg">
                                    <ul class="list-reset block">
                                        <li class="mr-6">
                                            <a class="no-underline text-grey-dark block items-center pt-2 pb-4 border-b border-teal" href="#about">About</a>
                                        </li>
                                        <li class="mr-6">
                                            <a class="no-underline opacity-50 md:text-grey-darker md:opacity-100 block items-center pt-2 pb-4 border-b border-transparent hover:opacity-100 md:hover:border-teal" href="#portfolio">Chat</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-auto p-8">
                    <div class="w-2/5 h-64 mt-8 mb-4 ml-auto mr-auto border-2 border-gray rounded-lg shadow-lg">
                        <img class="w-full h-64 border-2 border-gray shadow-lg rounded-lg" src="http://res.cloudinary.com/dc9kfp5gt/image/upload/c_scale,e_art:incognito,h_340,q_100,w_330/v1519764764/IMG_20180227_214951_697_o3buej.jpg">
                    </div>
                </div>
                <div class="w-3/4 h-auto p-8 text-center ml-auto mr-auto mt-4 mb-auto">
                    <span>
                        <span class="text-lg">
                            Adroit, passionately curious Software Developer based in Lagos, Nigeria. I love learning and sharing knowledge about web development/design, am currently working on been a world class software developer, "<em class="text-teal"><?php echo $username; ?></em>".
                        </span>
                    </span>
                </div>
                <div class="z-10  block pin-b bg-white pin-l h-16 mt-8 flex-1 w-1/2 sm:w-full sm:fixed md:w-full md:fixed text-center text-gray border-t pt-4">
                    <a class="no-underline mr-4" href="https://www.facebook.com/bollybkampo" target="_blank">
                        <svg class="fill-current text-teal inline-block h-4 w-4" aria-labelledby="simpleicons-facebook-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title id="simpleicons-facebook-icon">Facebook icon</title>
                            <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/>
                        </svg>
                    </a>
                    <a class="no-underline mr-4" href="https://twitter.com/bollybkampo" target="_blank">
                        <svg class="fill-current text-teal inline-block h-4 w-4" aria-labelledby="simpleicons-twitter-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title id="simpleicons-twitter-icon">Twitter icon</title>
                            <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/>
                        </svg>
                    </a>
                    <a class="no-underline mr-4" href="https://medium.com/@ogundijiboladeadio" target="_blank">
                        <svg class="fill-current text-teal inline-block h-4 w-4" aria-labelledby="simpleicons-medium-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title id="simpleicons-medium-icon">Medium icon</title>
                            <path d="M2.846 6.36c.03-.295-.083-.586-.303-.784l-2.24-2.7v-.403H7.26l5.378 11.795 4.728-11.795H24v.403l-1.917 1.837c-.165.126-.247.333-.213.538v13.5c-.034.204.048.41.213.537l1.87 1.837v.403h-9.41v-.403l1.937-1.882c.19-.19.19-.246.19-.538V7.794l-5.39 13.688h-.727L4.278 7.794v9.174c-.052.386.076.774.347 1.053l2.52 3.06v.402H0v-.403l2.52-3.06c.27-.278.39-.67.326-1.052V6.36z"/>
                        </svg>
                    </a>
                    <a class="no-underline mr-4" href="https://github.com/adroit11">
                        <svg class="fill-current text-teal inline-block h-4 w-4" aria-labelledby="simpleicons-github-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title id="simpleicons-github-icon">GitHub icon</title>
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                        </svg>
                    </a>
                    <a class="no-underline mr-4" href="https://www.linkedin.com/in/ogundiji-bolade-b3b00387/" target="_blank">
                        <svg class="fill-current text-teal inline-block h-4 w-4" aria-labelledby="simpleicons-linkedin-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title id="simpleicons-linkedin-icon">LinkedIn icon</title>
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                    </a>
                    <a class="no-underline mr-4" href="https://codepen.io/Adroit11" target="_blank">
                        <svg class="fill-current text-teal inline-block h-4 w-4" aria-labelledby="simpleicons-codepen-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title id="simpleicons-codepen-icon">CodePen icon</title>
                            <path d="M24 8.182l-.018-.087-.017-.05c-.01-.024-.018-.05-.03-.075-.003-.018-.015-.034-.02-.05l-.035-.067-.03-.05-.044-.06-.046-.045-.06-.045-.046-.03-.06-.044-.044-.04-.015-.02L12.58.19c-.347-.232-.796-.232-1.142 0L.453 7.502l-.015.015-.044.035-.06.05-.038.04-.05.056-.037.045-.05.06c-.02.017-.03.03-.03.046l-.05.06-.02.06c-.02.01-.02.04-.03.07l-.01.05C0 8.12 0 8.15 0 8.18v7.497c0 .044.003.09.01.135l.01.046c.005.03.01.06.02.086l.015.05c.01.027.016.053.027.075l.022.05c0 .01.015.04.03.06l.03.04c.015.01.03.04.045.06l.03.04.04.04c.01.013.01.03.03.03l.06.042.04.03.01.014 10.97 7.33c.164.12.375.163.57.163s.39-.06.57-.18l10.99-7.28.014-.01.046-.037.06-.043.048-.036.052-.058.033-.045.04-.06.03-.05.03-.07.016-.052.03-.077.015-.045.03-.08v-7.5c0-.05 0-.095-.016-.14l-.014-.045.044.003zm-11.99 6.28l-3.65-2.44 3.65-2.442 3.65 2.44-3.65 2.44zm-1.034-6.674l-4.473 2.99L2.89 8.362l8.086-5.39V7.79zm-6.33 4.233l-2.582 1.73V10.3l2.582 1.726zm1.857 1.25l4.473 2.99v4.82L2.89 15.69l3.618-2.417v-.004zm6.537 2.99l4.474-2.98 3.613 2.42-8.087 5.39v-4.82zm6.33-4.23l2.583-1.72v3.456l-2.583-1.73zm-1.855-1.24L13.042 7.8V2.97l8.085 5.39-3.612 2.415v.003z"/>
                        </svg>
                    </a>
                    <a class="no-underline mr-4" href="" target="_blank">
                        <svg class="fill-current text-teal inline-block h-4 w-4" aria-labelledby="simpleicons-discord-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title id="simpleicons-discord-icon">Discord icon</title>
                            <path d="M20.222 0c1.406 0 2.54 1.137 2.607 2.475V24l-2.677-2.273-1.47-1.338-1.604-1.398.67 2.205H3.71c-1.402 0-2.54-1.065-2.54-2.476V2.48C1.17 1.142 2.31.003 3.715.003h16.5L20.222 0zm-6.118 5.683h-.03l-.202.2c2.073.6 3.076 1.537 3.076 1.537-1.336-.668-2.54-1.002-3.744-1.137-.87-.135-1.74-.064-2.475 0h-.2c-.47 0-1.47.2-2.81.735-.467.203-.735.336-.735.336s1.002-1.002 3.21-1.537l-.135-.135s-1.672-.064-3.477 1.27c0 0-1.805 3.144-1.805 7.02 0 0 1 1.74 3.743 1.806 0 0 .4-.533.805-1.002-1.54-.468-2.14-1.404-2.14-1.404s.134.066.335.2h.06c.03 0 .044.015.06.03v.006c.016.016.03.03.06.03.33.136.66.27.93.4.466.202 1.065.403 1.8.536.93.135 1.996.2 3.21 0 .6-.135 1.2-.267 1.8-.535.39-.2.87-.4 1.397-.737 0 0-.6.936-2.205 1.404.33.466.795 1 .795 1 2.744-.06 3.81-1.8 3.87-1.726 0-3.87-1.815-7.02-1.815-7.02-1.635-1.214-3.165-1.26-3.435-1.26l.056-.02zm.168 4.413c.703 0 1.27.6 1.27 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334.002-.74.573-1.338 1.27-1.338zm-4.543 0c.7 0 1.266.6 1.266 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334 0-.74.57-1.338 1.27-1.338z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- no-underline text-white opacity-50 md:text-grey-dark md:opacity-100 flex items-center py-4 border-b border-transparent hover:opacity-100 md:hover:border-grey-dark -->
        <!-- Right Content Goes Here -->
        <div class="flex-1 bg-white h-screen overflow-auto">
            <div class="fixed border-b w-full h-12 ss:hidden p-8 mb-4 block bg-white">
                    <div class="">
                        <ul class="list-reset flex">
                            <li class="mr-6">
                                <a class="no-underline text-grey-dark flex items-center" href="#about">About</a>
                            </li>
                            <li class="mr-6">
                                <a class="no-underline text-white opacity-50 md:text-grey-darker md:opacity-100 flex items-center" href="#portfolio">Chat</a>
                            </li>
                        </ul>
                    </div>
            </div>
            <div class="w-full h-6 ss:hidden mt-2"></div>
            <div id="about" class="w-full h-auto p-8 mt-4">
                <div class="w-full h-auto border-2 border-grey-light shadow rounded-lg p-4 mb-8">
                    <h2 class="text-base font-semibold leading-tight mb-8 pb-2 border-b">About Me</h2>
                    <div class="w-full h-auto p-8">
                        An Adroit, Driven, Goal oriented Web developer focused on solving web problem, and getting things done properly and on time. I take each day as an adventure to explore, learn and produce something new to meet human needs, I always dare to dream and think outside the box.
                        <p>Yes, I am me that dare to swim in every Oceans, Seas, and Rivers of the world. Am just <span class="text-orange-dark">an ordinary boy</span>, <span class="text-teal-darkest">with adroitness</span> <span class="text-teal-dark">doing the extra-ordinary</span>, simply because <span class="text-red-dark">I believe in possibilities</span>.</p>
                        <h2 class="text-base font-semibold leading-tight mt-8 mb-8 pb-2">Skills</h2>
                        <p class="mt-2">HTML, HTML5</p>
                        <p class="mt-2">CSS, CSS3</p>
                        <p class="mt-2">JavaScript (Beginner)</p>
                        <p class="mt-2">Responsive Designs</p>
                        <p class="mt-2">PHP (Beginner)</p>
                        <h2 class="text-base font-semibold leading-tight mt-8 mb-8 pb-2">Frameworks & Libraries</h2>
                        <p class="mt-2">Tailwind CSS (Beginner)</p>
                        <p class="mt-2">Bootstrap (Beginner)</p>
                        <p class="mt-2">React Js (Beginner)</p>
                        <p class="mt-2">Vue Js (Beginner)</p>
                    </div>
                </div>
                <div id="portfolio" class="w-full h-auto border-2 bg-teal-lightest border-grey-light shadow rounded-lg p-4 mb-8">
                    <h2 class="text-base font-semibold leading-tight mb-8 pb-2 border-b">Chat</h2>
                    <div class="w-full h-auto p-8"">
                      
                    </div>
                </div>
                <!--<div class="w-full h-auto border-2 bg-yellow-lightest border-grey-light shadow rounded-lg p-4 mb-8">
                    <h2 class="text-base font-semibold leading-tight mb-8 pb-2 border-b">Awards</h2>
                    <div class="w-full h-auto p-8">
                        I'm focuced and adroitly working towards becoming a world class full-stack web developer. In my journey so far I have been encouraged with some scholarship awards and certificates.
                        <div class="px-2 mt-8">
                            <div class="flex -mx-2">
                                <div class="w-1/2 px-2 rounded-lg">
                                    <div class="w-full h-auto">
                                        <img class="w-full rounded-lg" src="http://res.cloudinary.com/dc9kfp5gt/image/upload/c_scale,h_400,q_100,w_460/v1519840117/Google-Dev-EMEA-Badge_tahpnu.png" alt="my Google Frontend Web Developer Scholarship">
                                    </div>
                                </div>
                                <div class="w-1/2 px-2 rounded-lg">
                                    <div class="w-full h-auto">
                                            <img class="w-full rounded-lg" src="http://res.cloudinary.com/dc9kfp5gt/image/upload/c_scale,h_400,q_100,w_460/v1519835751/DHUUexfXUAAnXn3_ahhhpp.jpg" alt="my freecodecamp certificate">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contact" class="w-full h-auto border-2 bg-blue-lightest border-grey-light shadow rounded-lg p-4 mb-8">
                    <h2 class="text-base font-semibold leading-tight mb-8 pb-2 border-b">Contact</h2>
                    <div class="w-full h-auto p-8">
                        I'm friendly and love sharing ideas. You can reach me on twitter, linkedin, facebook, discord, check my projects on github and codepen, read my interesting posts on medium.
                        <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col my-2 mt-8">
                            <form class="w-full max-w-xs">
                                <div class="md:flex md:items-center mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block md:text-right mb-1 md:mb-0 pr-4" for="mail-sender">
                                            From:
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" type="text" placeholder="your@email.com">
                                    </div>
                                </div>
                                <div class="md:flex md:items-center mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block md:text-right mb-1 md:mb-0 pr-4" for="mail-receiver">
                                            To:
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" type="text" value="kamponistullar@gmail.com" disabled>
                                    </div>
                                </div>
                                <div class="md:flex md:items-center mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block md:text-right mb-1 md:mb-0 pr-4" for="mail-message">
                                            Message:
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" type="text" placeholder="Your Message..."></textarea>
                                    </div>
                                </div>
                                <div class="md:flex md:items-center">
                                    <div class="md:w-1/3"></div>
                                    <div class="md:w-2/3">
                                    <button class="shadow bg-teal-dark hover:bg-teal-light text-white font-bold py-2 px-4 rounded" type="button">
                                        Email Me
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $( document ).ready(function() {
        $( ".menu" ).hide();
        $( ".hamburger" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
        $( ".hamburger" ).show();
        });
        });
        });
    </script>
</body>
</html>
