
  <br><br>
  <h2>ARTICLES</h2>
  <br>
  <hr>
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-horus-tab" data-toggle="tab" href="#nav-horus" role="tab" aria-controls="nav-horus" aria-selected="true">Table 1</a>
      <a class="nav-item nav-link" id="nav-kework-tab" data-toggle="tab" href="#nav-kework" role="tab" aria-controls="nav-kework" aria-selected="false">Table 2</a>
    </div>
  </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-horus" role="tabpanel" aria-labelledby="nav-horus-tab"><br>
          <?= getContent("Table1"); ?>
        </div>
        <div class="tab-pane fade" id="nav-kework" role="tabpanel" aria-labelledby="nav-kework-tab"><br>
          <?= getContent("Table2"); ?>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> 
<script type="text/javascript">
  $(document).ready(function() {
    /*
     * START TABS: REFRESH AND STAY IN SAME TAB
     */
    $('#nav-tab a').click(function(e) {
      e.preventDefault();
      $(this).tab('show');
    });
    // store the currently selected tab in the hash value
    $("div.nav-tabs > a").on("shown.bs.tab", function(e) {
      var id = $(e.target).attr("href").substr(1);
      window.location.hash = id;
    });
    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#nav-tab a[href="' + hash + '"]').tab('show');
    /*
     * END TABS: REFRESH AND STAY IN SAME TAB
     */
  });
</script>
