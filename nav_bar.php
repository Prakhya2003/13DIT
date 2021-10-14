<!-- Menu Drop Down CSS Code -->

<style>

/* Accordion CSS */

.accordion {   
  background-color: #6c5ce7;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  font-family: 'Raleway', sans-serif;
}

.active, .accordion:hover {     /* Active Colour change to improve usability */
  background-color: #eee; 
  color: black;
}

.panel {
  padding: 0 8px;
  display: none;
  background-color: white;
  overflow: hidden;
}

/* Navigation Bar CSS */

.topnav {
  overflow: hidden;
  background-color: #6c5ce7;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #a29bfe;
  color: white;
}

.topnav a.active {    /* Active Colour change to improve usability */
  background-color: #a29bfe;
  color: white;
}

.topnav .icon {
  display: none;
}

/* When window width is smaller than 600px  */
	
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

</style>
