$(document).ready(function () {
    $('#Add').click(function (e) {
        e.preventDefault()
        let Name = $('#Name').val()
        let Email = $('#Email').val();
        let Age = $('#Age').val();
        let PhonNo = $('#PhonNo').val()

        $.ajax({
            type: "POST",
            url: 'http://localhost/GUVIInternship/php/addprofile.php',
            dataType: "json",
            data: {
                Name: Name,
                Email: Email,
                Age: Age,
                PhonNo: PhonNo
            },
            statusCode: {
                200: function (response) {
                    let splited = response.responseText.split('||')
                   alert(splited[1])
                }
            }
        })


    })
})