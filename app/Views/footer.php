</div>
<footer>
  <div class="copy">
    <ul>
      <li>&copy; 2017 FRESH'R</li>
    </ul>
  </div>
  <div class="liens">
    <ul>
      <li>Terms</li>
      <li>Privacy</li>
      <li>Press</li>
    </ul>
  </div>
  <div class="icones">
    <ul>
      <li><i class="fa fa-envelope"></i></li>
      <li><i class="fa fa-facebook"></i></li>
      <li><i class="fa fa-twitter"></i></li>
      <li><i class="fa fa-instagram"></i></li>
    </ul>
  </div>
</footer>

</div>

<script src="<?= VIEW . 'js/jquery-2.2.4.js' ?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
if ($("#home").length > 0)  {
  $('.navbar').hide();
  $('footer').hide();
};

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 800) {
    $('.buttonLike').fadeIn();
  } else {
    $('.buttonLike').fadeOut();
  }
});
</script>
<script src="<?= VIEW . 'js/script.js' ?>"></script>
</body>
</html>
