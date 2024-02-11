@extends('layouts.layout')

@section('content')

<div class="contact-contain">
    <div class="contact-text">
    <h1>Contact our help team</h1>
    <br>
    <p>Fill out the form to get in touch with a member of our team for further enquiries.</p>
    <br>
    <p>Check out our FAQs before filling the form, to answer commonly asked questions.</p>
    </div>

    <div class="contact-form">
        <form action="/views/contactus.blade.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="mobile">Mobile Number</label>
            <input type="tel" id="mobile" name="mobile" placeholder="Your mobile number..">

            <label for="country">Country/Region</label>
            <input type="text" id="country" name="country" placeholder="Your country/region..">

            <label for="subject">Your Enquiry</label>
            <textarea id="contact_subject" name="subject" placeholder="Write something.."></textarea>

            <input type="submit" id="contact_submit" value="Submit">
        </form>
    </div>
</div>
@endsection