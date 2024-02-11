@extends('layouts.layout')

@section('content')

<div class="faqs-contain">
    <h1>FAQs</h1>

    <p id="acc1">Using the Yarniverse Website</p>
    <button class="accordion" id="dd-start">I am unable to log into my account.</button>
    <div class="panel">
    <p>If you have forgotten/would like to reset your password, or are having issues logging in, please contact the Customer 
        Support Team via the Contact Us page.</p>
    </div>

    <button class="accordion" id="dd">Can I save items/checkout without an account?</button>
    <div class="panel">
    <p>Both actions require an account. This is so that items will stay where you left them if you leave the site and return at a later time.</p>
    </div>

    <button class="accordion" id="dd">How can I leave a product review/rating?</button>
    <div class="panel">
    <p>Products can be viewed whilst browsing, or when accessing your Purchase History. A tab under the product allows you to write 
        a review and leave images of your pattern's results.</p>
    </div>

    <button class="accordion" id="dd">Will I receive confirmation of my purchase?</button>
    <div class="panel">
    <p>Yes, confirmation is sent to the email address provided at checkout/registered in your account.</p>
    </div>

    <p id="acc2">Project Tracking</p>
    <button class="accordion" id="dd-start">How do I upload a new crochet pattern to my account?</button>
    <div class="panel">
    <p>To upload a new pattern, navigate to your account dashboard, click on the pencil icon, and select the "Upload Pattern" 
        option. Follow the prompts to add details and upload your pattern.</p>
    </div>

    <button class="accordion" id="dd">Can I edit my project after saving details?</button>
    <div class="panel">
    <p>Yes, you can edit pattern details by accessing the "Pattern Management" section and selecting the pattern
        you wish to modify. Click on the "Edit" option (pencil icon) to make changes.</p>
    </div>

    <button class="accordion" id="dd">Are there specific file formats for image uploads?</button>
    <div class="panel">
    <p>We support various file formats for pattern uploads, including PDF, JPG, and PNG. Refer to our pattern
        guidelines for the complete list.</p>
    </div>

    <p id="acc3">Interaction Features</p>
    <button class="accordion" id="dd-start">Can other users see my reviews and ratings?</button>
    <div class="panel">
    <p>Yes, and you theirs, but don't worry! Account information is for your eyes only.</p>
    </div>

    <button class="accordion" id="dd">How do I upload images to a product review?</button>
    <div class="panel">
    <p>Under a product lies a section for leaving a review/rating. In this section there is a tab for uploading
        images from your device - this is optional.</p>
    </div>

    <button class="accordion" id="dd">How do I find patterns to leave comments under?</button>
    <div class="panel">
    <p>Simply navigate to a product via the navigation tab with our pattern categories, or use the search bar to find 
        a product.</p>
    </div>

    <p id="acc4">Payment</p>
    <button class="accordion" id="dd-start">How long does it take for payment to process?</button>
    <div class="panel">
    <p>Payment is typically instant, but pending payments can take up to 5 working days to be appoved by your banking group.</p>
    </div>

    <button class="accordion" id="dd">What payment methods are currently accepted on your platform?</button>
    <div class="panel">
    <p>We currently accept credit/debit card payments for all transactions on our platform.</p>
    </div>

    <button class="accordion" id="dd">Are there additional fees associated with payments made?</button>
    <div class="panel">
    <p>No, we will not charge you any more than the exact price paid for your products.</p>
    </div>

    <button class="accordion" id="dd">Can I get a refund for my product?</button>
    <div class="panel">
    <p>Refund eligibility depends on the type of product or service purchased. Please view our Terms and Conditions for more
        on this.</p>
    </div>

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
    }
    </script>

</div>

@endsection