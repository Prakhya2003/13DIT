<!DOCTYPE html>
<html>
  <head>
    <title>Volunteer Sign up form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      }
      form {
      width: 80%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
/*      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
*/
/*
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;} 
*/
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="/">
        <br/>
        <p>Sign Up to Volunteer at Elizabeth Knox</p>
        <br/>
        <div class="colums">
          <div class="item">
            <label for="email">Email Address<span>*</span></label>
            <input id="email" type="text"   name="email" required/>
          </div>
          <div class="item">
            <label for="phone">Phone Number<span>*</span></label>
            <input id="phone" type="tel"   name="phone" required/>
          </div>
          <div class="item">
            <label for="suburb">Suburb<span>*</span></label>
            <input id="suburb" type="text"   name="suburb" required/>
          </div>
          <div class="item">
            <label for="city">City<span>*</span></label>
            <input id="city" type="text"   name="city" required/>
          </div>
        </div>
        <div class="week">
          <div class="question">
            <label>Which Day?</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_3" name="day"/>
                <label for="radio_3" class="radio"><span>Sunday</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_4" name="day"/>
                <label for="radio_4" class="radio"><span>Monday</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_5" name="day"/>
                <label for="radio_5" class="radio"><span>Tuesday</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_6" name="day"/>
                <label for="radio_6" class="radio"><span>Wednesday</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_7" name="day"/>
                <label for="radio_7" class="radio"><span>Thursday</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_8" name="day"/>
                <label for="radio_8" class="radio"><span>Friday</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_9" name="day"/>
                <label for="radio_9" class="radio"><span>Saturday</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <label>Which Activity are you sign up for?</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_10" name="activity"/>
                <label for="radio_10" class="radio"><span>Companionship</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_11" name="activity"/>
                <label for="radio_11" class="radio"><span>Dining Room Host</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_12" name="activity"/>
                <label for="radio_12" class="radio"><span>Reading and Language Support</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_13" name="activity"/>
                <label for="radio_13" class="radio"><span>New Residents Support</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_14" name="activity"/>
                <label for="radio_14" class="radio"><span>Linen Service Assistance</span></label>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <label for="others">Do you have any relevant experience or information you would like to include?</label>
          <textarea id="others" rows="3"></textarea>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>
