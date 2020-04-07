                      <div class="pg-empty-placeholder" style="background: #000; width: 100%; margin: 0; padding: 0; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); height: 35px;;"></div>
       </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="assets/js/music.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script>
var coll = document.getElementsByClassName("coll-apsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
    </body>
</html>