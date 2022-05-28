<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
ob_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['nome']) && !isset($_SESSION['email'])){
  header("Location: index.php");
}
?>

</div>

</div>

<script src="https://coreui.io/demo/4.0/free/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="https://coreui.io/demo/4.0/free/vendors/simplebar/js/simplebar.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>

<script src="https://coreui.io/demo/4.0/free/vendors/chart.js/js/chart.min.js"></script>
<script src="https://coreui.io/demo/4.0/free/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
<script src="https://coreui.io/demo/4.0/free/vendors/@coreui/utils/js/coreui-utils.js"></script>
<script src="https://coreui.io/demo/4.0/free/js/main.js"></script>
<script></script>
</body>