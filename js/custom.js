$(document).on("change", "#customFile", function(){
    var len = $('#customFile')[0].files.length;
    var file_names ='<ul class="file_name">';
    for(var i=0;i < len; i++)
    {
        file_names = file_names + "<li>" + $('#customFile')[0].files[i].name+"</li>";
    }
    file_names += "</ul>";
    console.log(file_names);
    $(".attach_lable_string").html(file_names);
});

$("#home_submit_work").validate({
    // Specify validation rules
    rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        fname: "required",
        email: {
            required: true,
            // Specify that email should be validated
            // by the built-in "email" rule
            email: true
        },
        mobileno: {
            required: true,
            number: true
        },
        subject: {
            required: true
        },
        date: {
            required: true
        },
        description: {
            required: true,
            minlength: 25
        }
    },
    // Specify validation error messages
    messages: {
        fname: "Please enter your name",
        email: {
            required: "Please provide a your email Id",
            email: "Please enter a proper email format"
        },
        mobileno: {
            required: "Please provide a your mobile no.",
            number: "Please enter a correct Mobile No."
        },
        subject: "Please enter your subject",
        date: "Enter Your deadline",
        description: {
            required: "Please provide Descrption for you Assignment",
            minlength: "Please enter Description of min 25 Characters"
        }
    }
})
