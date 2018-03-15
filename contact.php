<html>



<head>
  



</head>

<style>
  
   .holder {
  width:100%;
  height:400px;
  text-align:center;
  margin-top:50px;
  font-size:200%;
}

form {
  font-family: 'Titillium Web', sans-serif !important;
}

#contactform {
  display:none;
  position:fixed;
  margin:0;  padding:0;
  left:0; top:0;
  height:100%;
  width:100%;
  background:rgba(0, 0, 0, 0.2);
}

.contact-form {
  top:50px;
}

.center {
    margin-left: auto;
    margin-right: auto;
}

/*float*/
.pull-left { float: left; }
.pull-right { float: left; }


.txt-center { text-align: center; }


button,
input,
select,
textarea {
    font-size: 100%; 
    margin: 0;
}

button::-moz-focus-inner,
input::-moz-focus-inner { 
    border: 0;
    padding: 0;
}

textarea {
    overflow: auto; 
    padding-left: 3px;
    vertical-align: top; 
}

#contact-form {
    background-color: #FFF;
}

#contact-form ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

#contact-form li {
    position: relative; 
}

input:required,
input:invalid,
input:valid,
textarea:required,
textarea:invalid,
textarea:valid {
    box-shadow:none !important;
}

input, 
textarea {
    display: block; 
    border: 0;
    background-color: transparent;
    margin-top: 15px;
    margin-bottom: 15px;
}

::-webkit-input-placeholder,
:-moz-placeholder,
::-moz-placeholder,
:-ms-input-placeholder {  
    color: #FFF;
    opacity: .2 !important;
}

label {
    display: inline-block;
    position: absolute; 
    margin-top: -64px;
    font-size: 1em;
    font-weight: bold;
    color: #333;
    opacity: .5;
    opacity: 1;
    -webkit-transition: transform  100ms ease-out,
                        opacity    300ms ease-in-out,
                        color      200ms ease-out, 
                        margin     200ms ease-out;
            transition: transform  100ms ease-out,
                        opacity    300ms ease-in-out,
                        color      200ms ease-out, 
                        margin     200ms ease-out;
}

input, 
textarea { 
    position: relative;
    width: 100%;
    margin-bottom: 35px ; 
    padding-top: 1.2em;
    padding-bottom: .45em;
    outline: 0;
    resize: none;
    overflow: hidden;
    border-bottom: 1px solid #CECECE;
    -webkit-transition: text-indent  400ms ease-out,
                        transform    225ms ease-out,
                        opacity      225ms ease-in-out,
                        border       300ms ease-out, 
                        color        300ms ease-out;
            transition: text-indent  400ms ease-out,
                        transform    225ms ease-out,
                        opacity      225ms ease-in-out,
                        border       300ms ease-out, 
                        color        300ms ease-out;
}

input { 
    text-indent: -999px; 
}

input:focus,
textarea:focus {
    color: #777;
    border-bottom: 3px solid rgba(0, 161, 217, 1);
    opacity: 1;
    text-indent: 0;
}

input[type=url]:focus {
    color: #777;
    border-bottom: 3px solid rgba(0, 161, 217, 1) !important;
    opacity: 1;
    text-indent: 0;
}

input[type=url]:focus ~ .required {
    opacity: 1 !important;
}

input:focus + label {
    margin-top: -90px;
    opacity: 1;
    color: rgba(0, 161, 217, 1);
}

textarea:focus + label {
    margin-top: -115px;
    opacity: 1;
    color: rgba(0, 161, 217, 1);
}

input:focus ~ .required {
    opacity: 1;
}

textarea { 
    text-indent: -999px; 
    padding-bottom: 15px;
    height: auto;
    resize: none;
}

input[type=submit] {
    margin-top: 2.2em;
    margin-bottom: 1em;
    padding: .7em 1em ;
    width: 100%;
    cursor: pointer;
    border: 0;
    background-color: #2BB673;
    color: #FFF !important;
    font-weight: bold;
    font-size: 1.3em;
    border: 0;
    opacity: 1 !important;
    text-indent: 0;
    -webkit-transform: none;
            transform: none;
}

/*NOTIFICATIONS*/
.required {
    position: absolute;
    margin-top: -26px;
    /*margin-left: 59%;*/
    opacity: 0;
    color: rgba(0, 161, 217, 1);
    font-style: italic;
    font-weight: bold;
    font-size: .9em;
    -webkit-transition: opacity 200ms ease-out;
            transition: opacity 200ms ease-out;
}

.notification {
    position: absolute;
    color: rgba(242, 48, 65, 0.95);
    margin-top: -25px;
    margin-bottom: 30px;
    opacity: 0;
    font-size: .9em;
    font-weight: bold;
    -webkit-transition: opacity  325ms ease-out;
            transition: opacity  325ms ease-out;
}

.char-counter {
    position: absolute;
    color: rgba(0, 161, 217, 1);
    margin-top: -25px;
    margin-bottom: 30px;
    opacity: 1;
    font-size: .9em;
    font-weight: bold;
    -webkit-transition: opacity  325ms ease-out;
            transition: opacity  325ms ease-out;   
}

@media (min-width: 0px) and (max-width: 767px) {
    h1 {
        font-size: 1.75em;
    }

    label {
        font-size: .9em;
    }

    #contact-form {
        position: relative;
        width: 300px;
        margin: 15px auto;
        padding: 45px 20px 30px;
        background-color: #FFF;
    }

    .required {
        margin-top: -24px;
        margin-left: 76%;
    }

    textarea:focus ~ .required,
    textarea:not(:focus) ~ .required {
        margin-top: -24px;
    }

    textarea:focus ~ .required { opacity: 1; }
    textarea:not(:focus) ~ .required { opacity: 0; }
}

@media (min-width: 768px) {
    #contact-form {
        position: relative;
        width: 450px;
        margin: 30px auto;
        padding: 45px 50px 30px;
        background-color: #FFF;
    }

    .required {
        margin-top: -25px;
        margin-left: 82.5%;
    }

    textarea:focus ~ .required,
    textarea:not(:focus) ~ .required {
        margin-top: -23px;
    }

    textarea:focus ~ .required {
        opacity: 1;
    }

    textarea:not(:focus) ~ .required {
        opacity: 0;
    }
}





</style>





  <body>
    


<div class="holder">
  <a href="#" id="test">Contact</a>
</div>

<div id="contactform">
  <form id="contact-form" class="contact-form" action="#" method="post">
    <h1>Popup Form</h1>
    <ul>
      <li class="comment">
        <!--Tip: textarea breaks if tags are not in the same line or broken up somehow -->
        <textarea class="text-comment" rows="2" id="text" spellcheck="false" placeholder="Say something." min-length="2" max-length="500" required></textarea>
        <label for="message">Message</label>
        <span class="notification"></span>
        <span class="required"><strong><small><em> (required)</em></small></strong></span>
        <span class="char-counter"></span>
      </li>
      <li class="name">
        <input type="text" class="input-name" name="name" placeholder="ie. Joe McDoodle" spellcheck="false" min-length="2" max-length="40" required />
        <label for="name">Name</label>
        <span class="notification"></span>
        <span class="required"><strong><small><em> (required)</em></small></strong></span>
        <span class="char-counter"></span>
      </li>
      <li class="email">
        <input type="email" class="input-email" name="email" placeholder="ie. my@email.com" spellcheck="false" min-length="2" max-length="30" required />
        <label for="email">Email</label>
        <span class="notification"></span>
        <span class="required"><strong><small><em> (required)</em></small></strong></span>
        <span class="char-counter"></span>
      </li>
    </ul>
    <!-- Submit -->
    <div class="form-btn">
      <input id="input-submit" class="input-submit" type="submit" value="Submit" id="submit" />
    </div>
  </form>
</div>




  </body>



<script>
  

  

var form = $("#contact-form");

//event listeners
form.addEventListener('blur', validateInput, true);
form.addEventListener('focus', readyInput, true);
form.addEventListener('focus', formCharCounter, true);
form.addEventListener('keyup', formCharCounter, true);
form.addEventListener('keydown', formCharCounter, true);

//error messages
var errorMsg = {
    invalid: 'Invalid input.',
    required: 'This field is required.',
    url: 'Invalid url.',
    email: 'E-mail is invalid.',
    tooShort: 'Input is too short.',
    tooLong: 'Input is too long.'
};

//regex stuff
var pattern = {
    name: /[A-Za-z -']$/,
    email: /^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/,
    url: /^(https?:\/\/)?([\w\d\-_]+\.+[A-Za-z]{2,})+\/?/
};

//a few utitlies
var input = {
    say: function (el, msg, visible) {
        var field = $(el);

        field.textContent = msg;
        field.style.opacity = visible;
    },
    show: function (el) {
        return el.style.opacity = '1';
    },
    hide: function (el) {
        return el.style.opacity = '0';
    }
};

//validation 
function validateInput(e) {
    var commentMin = e.target.getAttribute('min-length');
    var commentMax = e.target.getAttribute('max-length');
    var applyValid = 'text-indent: 0; border-bottom: 3px solid rgba(0, 163, 136, 0.95); color: rgba(0, 163, 136, 0.95);';
    var applyError = 'text-indent: 0; border-bottom: 3px solid rgba(242, 48, 65, 0.95); color: rgba(242, 48, 65, 0.95);';

    //hide char counter
    input.hide($('.' + e.target.parentNode.className + ' .char-counter'));

    //Align labels
    if (e.target.tagName.toLowerCase() === 'input') {
        ($('.' + e.target.parentNode.className + ' label')).style.marginTop = '-90px';
    } else if (e.target.tagName.toLowerCase() === 'textarea') {
        ($('.' + e.target.parentNode.className + ' label')).style.marginTop = '-105px';
    }

    if (e.target.tagName.toLowerCase() === 'input' && e.target.type !== 'submit') {
        //test input fields, probably better targeting input classes/id
        //if the form happens to have multiple fields of the same type
        if ((e.target.type) === 'text') {
            if (pattern.name.test(e.target.value) === true && e.target.value !== '') {
                input.say('.' + e.target.parentNode.className + ' .notification', '', 0);
                e.target.style.cssText = applyValid;
                return true;
            } else if (pattern.name.test(e.target.value) === false && e.target.value !== '') {
                input.say('.' + e.target.parentNode.className + ' .notification', errorMsg.invalid, 1);
                e.target.style.cssText = applyError;
                return false;
            }
        } else if ((e.target.type) === 'email') {
            if (pattern.email.test(e.target.value) === true && e.target.value !== '') {
                input.say('.' + e.target.parentNode.className + ' .notification', '', 0);
                e.target.style.cssText = applyValid;
                return true;
            } else if (pattern.email.test(e.target.value) === false && e.target.value !== '') {
                input.say('.' + e.target.parentNode.className + ' .notification', errorMsg.email, 1);
                e.target.style.cssText = applyError;
                return false;
            }
        } else if ((e.target.type) === 'url' && e.target.value !== '') {
            if (pattern.url.test(e.target.value) && e.target.value !== '') {
                input.say('.' + e.target.parentNode.className + ' .notification', '', 0);
                e.target.style.cssText = applyValid;
                return true;
            } else if (!pattern.url.test(e.target.value)) {
                input.say('.' + e.target.parentNode.className + ' .notification', errorMsg.url, 1);
                e.target.style.cssText = applyError;
                return false;
            }
        }
    } else if (e.target.tagName.toLowerCase() === 'textarea') {
        if (e.target.value !== '' && (e.target.value.length >= commentMin && e.target.value.length <= commentMax)) {
            input.say('.' + e.target.parentNode.className + ' .notification', '', 0);
            e.target.style.cssText = applyValid;
            return true;
        } else if (e.target.value !== '' && e.target.value.length < commentMin) {
            input.say('.' + e.target.parentNode.className + ' .notification', errorMsg.tooShort, 1);
            e.target.style.cssText = applyError;
            return false;
        } else if (e.target.value !== '' && e.target.value.length > commentMax) {
            input.say('.' + e.target.parentNode.className + ' .notification', errorMsg.tooLong, 1);
            e.target.style.cssText = applyError;
            return false;
        }
    }

    //if fields are empty except url which is optional
    if (e.target.value === '' && e.target.type !== 'submit') {
        if (e.target.type === 'url') {
            input.hide($('.' + e.target.parentNode.className + ' .notification'));
            e.target.style.cssText = applyValid;
            e.target.placeholder = 'n/a';
            return true;
        } else {
            input.say('.' + e.target.parentNode.className + ' .notification', errorMsg.required, 1);
            e.target.style.cssText = applyError;
            return false;
        }
    }
}

// hide notification and reveal char count
function readyInput(e) {
    if ((e.target.tagName.toLowerCase() === 'input') || (e.target.tagName.toLowerCase() === 'textarea')) {
        input.hide($('.' + e.target.parentNode.className + ' .notification'));
        input.show($('.' + e.target.parentNode.className + ' .char-counter'));
        e.target.style.cssText = 'text-indent: 0; border-bottom: 3px solid  rgba(0, 161, 217, 1); color: #777;'
    }
}

//apply char count
function formCharCounter(e) {
    if ((e.target.tagName.toLowerCase() === 'input' || e.target.tagName.toLowerCase() === 'textarea') && e.target.type !== 'submit') {
        textCounter($('.' + e.target.className), $('.' + e.target.parentNode.className + ' .char-counter'));
    }
}

//char count
function textCounter(field, counter) {
    var maxLength = field.getAttribute('max-length');

    if (field.value.length > maxLength) {
        field.value = field.value.substring(0, maxLength);
    } else {
        counter.textContent = maxLength - field.value.length + "/" + maxLength + ' chars';
    }
}

function $(q) {
    return document.querySelector(q);
}

form = $("#test");

//event listeners
form.addEventListener('click', testfunc, true);
  var r = document.getElementById("contactform");
r.style.display = "none";
function testfunc() {
  if (r.style.display == "none") {
    r.style.display = "block";
  } else {
    r.style.display = "none";
  }  
}
</script>


</html>

