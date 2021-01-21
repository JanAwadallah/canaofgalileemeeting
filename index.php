 


<?php
 include 'header.php';
// /* Database connection start */
//  include 'connection.php';
// $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }

// $sql = "SELECT * FROM  images";
// $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
// $image_count = 0;
// $button_html = '';		
// $slider_html = '';	
// while( $rows = mysqli_fetch_assoc($resultset)){	
// 	$active_class = "";			
// 	if(!$image_count) {
// 		$active_class = 'active';					
// 		$image_count = 1;
// 	}	
// 	$image_count++;
// 	$thumb_image = "nature_thumb_".$rows['id'].".jpg";	
// 	// slider image html
// 	$slider_html.= "<div class='carousel-item ".$active_class."'>";
//     $slider_html.= "<img src='img/".$rows['image']."' alt='1.jpg' class='d-block rounded z-depth'>";
    
//     $slider_html.= "<div class='carousel-caption d-none d-md-block'><h5>".$rows['Caption']."</h5></div></div>";
//     // Thumbnail html
// 	// Button html
// 	$button_html.= "<li data-target='#carousel-example-generic' data-slide-to='".$image_count."' class='".$active_class."'></li>";
// }
?>


<!-- <div class="container-fluid p-2">	
		
	<div id="carousel-example-generic " class="carousel slide" data-ride="carousel" >	  
		<ol class="carousel-indicators">
		<?php echo $button_html; ?>		
		</ol>	  
		<div class="carousel-inner">	  
			<?php echo $slider_html; ?>
		</div>
		  <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span id="arrow" class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>	 
		<ul class="thumbnails-carousel clearfix">
			<?php echo $thumb_html; ?>
		</ul>
	</div>	

</div> -->
<div class="container">
<div class="center d-flex flex-row justify-content-around">
    <!--<div class="col-12 col-md-6 col-sm-12 col-lg-3">-->
        <a class="icons align-middle" href="events.php"><img class="icons" src="img\calendar-icon-upcoming-events-31.png"></a>
     <!--</div>-->
      <!--  <div class="col-12 col-md-6 col-sm-12 col-lg-3">-->
        <a class="icons align-middle" href="registeration.php"><img class="icons" src="img\2019Retreat.png"></a>
    <!--</div>-->
    <!--<div class="col-12 col-md-6 col-sm-12 col-lg-3">-->
    <!--    <a class="icons align-middle" href="Retreat2019.php"><img class="icons" src="img\2019Retreat.png"></a>-->
    <!--</div>-->
    <!--<div class="align-middle col-12 col-md-6 col-sm-12 col-lg-3">-->
        <a class="d-flex align-items-center" href="https://www.facebook.com/SGChurchmelbourne/" target="_blank" style="width:200%, hight:200%"><img  src="img\Canafacebook.png"></a>
    <!--</div>-->
   <!-- <div class="col-12 col-md-6 col-sm-12 col-lg-3">-->
        <a class="icons align-middle" href="https://stgeorgecopts.org.au/" target="_blank"><img class="icons" src="img\Final Logo001 copy.png"></a>
   <!-- </div>-->
    </div>

</div>

    <div class="container">
      <div class=" mt-5" style="border-radius: 15px;">
        <div class="row mt-5">
          <div class="col-sm-12 col-md-12">
            <div class="card mt-3">
              <img class="" src="img\nature1.jpg">
          
             <!-- Button trigger modal -->


<h3 class="title"><strong>The Characteristics Of A Christian Family</strong></h3>
<div id="reference"><card><h2><a data-toggle="modal" data-target="#ref"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 1v16.981h4v5.019l7-5.019h13v-16.981h-24zm12 8.028c0 2.337-1.529 3.91-3.684 4.335l-.406-.87c.996-.375 1.637-1.587 1.637-2.493h-1.547v-4h4v3.028zm5 0c0 2.337-1.529 3.91-3.684 4.335l-.406-.87c.996-.375 1.637-1.587 1.637-2.493h-1.547v-4h4v3.028z"/></svg></i></h2><h5>Marriage And Family Life</h5>
<h5></h5>by<strong> H.G. Bishop Moussa.</strong></h5></a></card></div>

<!-- Modal -->
<div class="modal fade" id="ref" tabindex="-1" role="dialog" aria-labelledby="refLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="refLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           The Characteristics Of A Christian Family <br>
        <cite><a href="http://www.smass.co.uk/life-in-christ/marriage-family-life" target="_blank"><i>Marriage And Family Life</i></a></cite><br>
        by H.G. Bishop Moussa.
      </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
   
    </div>
  </div>
</div>

              <blockquote>
  

              <p>
A Christian family has special traits that spring from the Christian concept of sacred marriage and the commandments of the Bible for the married couple about how to deal with each other and how to bring their children up. The Definition of a Christian Family is a small church, for St. Paul says: "To Philemon our beloved friend and fellow laborer “and to the church in your house" (Phil 1:2).  The family is an arena for experiencing the work of God in uniting the couple and sanctifying their offspring for Jesus Christ, and in radiating His light to those around.

<br>Domains of Family Love: There are many aspects, such as:
<ol>
    <li><strong>The Family Altar</strong>
<br>
The family prays together and reads chapters of the Bible as a means of binding its members together spiritually, so that they may all receive the blessings of the Holy Spirit and the power to overcome every evil.</li>
<br>
<li><strong>Taking Communion Together</strong><br>
It is when the whole family is gathered around the body and blood of Jesus in the Eucharist that the church as a community is best expressed. This gathering is a feature of our Orthodox Church, for not only does it bring the individual into a relationship with God but it also nurtures the relationship of the group with God:  "In the congregations I will bless the Lord" (Ps 26:12). The Spirit of God endows groups with more than it endows individuals. This is why taking Holy Communion together, following repentance and confession, is a continuous source of renewal for the family.</li><br>
<li><strong>Bringing Problems Before God</strong><br>
It is important to get our children used to lifting up their hearts to God when they face a problem.  Besides the fact that this makes a way for God to intervene in our problems and make our hearts ready to cooperate gratefully, we find that this method builds up faith and fellowship so that we turn to God under all circumstances. "Call upon Me in the day of trouble; I will deliver you, and you shall glorify Me" (Ps 50:15).</li><br>
<li><strong>Mutual Understanding</strong><br>
The pressures of life in our age, whether those put on the exhausted husband, on the working wife, or on the stressed children who have their conflicts and worries about the future, demand that the family stay committed to settling disputes in a spirit of mutual understanding. It is a great crime against the unity of the family and against oneself that a person puts his foot down and acts in self-centered individualism and stubbornness without consideration for others. We must learn to be understanding: to let go of our preconceived ideas and be open to one another.</li><br>
<li><strong>Friendly Visits</strong><br>
It is a good idea for the family to pay friendly visits to other Christian families because this strengthens the spirit of love in the Christian community.  It also nurtures and renews love among the family members. It is important that the wife cares for the feelings of her husband's family and the husband for the feelings of his wife's family. Most of the problems emerge from neglecting those important feelings. The harmony between the two families is a strong support for a Christian family and an important basis for psychologically well-balanced children.<br>

<br>We warn against interfering in the family's affairs because such interference frequently causes problems, division and serious disruption.</li><br>
<li><strong>A Spirit Of Simplicity And Contentment</strong>
One of the most disruptive influences on a family is that of imitation and jealousy of other families who are trying to 'Keep up with the Jones'. However, the Christian soul that the Lord has filled with His grace sings in heavenly peace: "The Lord is my shepherd; I shall not want" (Ps 23:1). It is important to examine oneself on this point and both parents are responsible to do that. St. Paul teaches us that: "Godliness with contentment is great gain... and having food and clothing, with these we shall be content. But those who desire to be rich fall into temptation and a snare, and into many foolish and harmful lusts which drown men in destruction and perdition" (1Tim 6:6-9).</li><br>
<li><strong> A Sound Upbringing</strong><br>
Parents should realize that the sound upbringing of children in their early childhood and the stages that follow is very important. When the parent is at one time tender to his or her children and on many other occasions strict, the child gets confused.  The child does not understand what principles to follow nor what good behavior means. When the father is strict with his adolescent son or daughter while the mother treats the same one tenderly - ignorant of the nature of that stage and of the father's aim - the young person will go off the rails and neglect duties. There must be an agreement between both parents on a policy about how to deal with their children. The affections should be balanced during the process of upbringing. It is important to watch the children's behavior with compassionate understanding.  This must be done effectively and persuasively, so that they become capable of choosing good friends and steer clear of pit-falls.
</li><br>
<li><strong>The Family And The Community</strong><br>
Sometimes the parents are very lax with their children; they let them give way to peer-group pressure. After a while, it turns out that they are mixed up with the wrong kind of company and are up to their necks in trouble. A positive and flexible Christian approach is to be open to people and deal with them in love and cooperation without getting involved in their aberrations. What is most harmful is being flexible to the point of laxity: letting our values, principles, and kids go adrift. The family should be careful when it comes to getting involved with other families. What some would consider friendly relations might end with critical problems.</li><br>

<li><strong>The Family And The Mass Media</strong><br>
It is not wrong to have access to different kinds of media at home like T.V, Internet, radio, newspapers and magazines, but it is wrong not to help children, and even parents, to choose the right thing. All should learn to pick the appropriate method for improving their minds: the right program, a good book etc. It is up to us to stop and ask ourselves if we are abandoning our children to trivialities or negative influences that will ruin their spiritual lives.<br>
<br>We hope for the day when the mass media puts across material that will build up the spiritual lives of our children-because life is not like a decadent play or a violent movie. Indeed, the mass media should elevate - not degrade people's instincts. There are the fields of science, art and sport, plus better religious knowledge that fights atheism and spreads the principles of pure, genuine love. These are the subjects that we can watch or listen to on the mass media.</li><br>
<li><strong>Serving Others</strong><br>
Christ taught us that He came not to be served but "to serve and to give His life a ransom for many" (Mt 20:28). There is no doubt that the spirit of servant hood is the sign of a real Christian soul and the blessed testimony of what Christianity does in people's lives. We should get accustomed to serving others and teaching our children to do so.<br>

<br>The selfishness that we teach our children will cost us dearly unless we correct ourselves. We ask our children to be selfish and hate even their cousins, to be jealous and take advantage of others. All this creates a fractious community full of feeble and resentful people. Christianity requires from us self-sacrificial love: "Love suffers long and is kind; love does not envy; love does not parade itself, is not puffed up; does not behave rudely, does not seek its own, is not provoked, thinks no evil; does not rejoice in iniquity, but rejoices in the truth; bears all things, believes all things, hopes all things, endures all things" (1Cor 13:4-7).</li><br>
</ol>

Hence it is necessary to have the spirit of servant hood, to give part of our time, effort, money and talents to others, especially within the church which channels such donations to the needy. Be honest in giving your tithes to the Lord and you will know His blessings. "Bring all the tithes... and prove Me now in this.... If I will not open for you the windows of heaven and pour out for you such blessing that there will not be room enough to receive it" (Mal 3:10).

Dear Friend,The church trusts that you are going to respond to itsappeal for family repentance - that you are going to prayand worship God together, take Communion together, glorifyJesus, and offer lively, fruitful service.</p>

   
</blockquote>
            </div>
          </div>
  
        </div>
      </div>
      </div>


      
    </div>
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity
</body>

</html>
