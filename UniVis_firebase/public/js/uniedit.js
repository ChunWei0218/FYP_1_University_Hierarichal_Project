        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyAJiPNFCPgcyMwJ74kTIvbloDpFjtoNMRw",
            authDomain: "fyp-univis.firebaseapp.com",
            databaseURL: "https://fyp-univis.firebaseio.com",
            projectId: "fyp-univis",
            storageBucket: "fyp-univis.appspot.com",
            messagingSenderId: "1017413433548",
            appId: "1:1017413433548:web:80905c4a434581790aaa69"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig)
        var database = firebase.database();
        var lastIndex = 0;

        // Get Data
        firebase.database().ref('nodes/').on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function(index, value) {
                if (value) {
                    htmls.push('<tr>\
                    <td>' + value.label + '</td>\
                    <td>' + value.category + '</td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            // $("#submitUser").removeClass('desabled');
        });

        // Add Data
        //     $('#submitNodes').on('click', function () {
        //     var values = $("#addCustomer").serializeArray();
        //     var name = values[0].value;
        //     var email = values[1].value;
        //     var userID = lastIndex + 1;
        //     console.log(values);
        //     firebase.database().ref('customers/' + userID).set({
        //         name: name,
        //         email: email,
        //     });
        //     // Reassign lastID value
        //     lastIndex = userID;
        //     $("#addCustomer input").val("");
        // });

        var updateID = 0;
        $('body').on('click', '.updateData', function() {
            updateID = $(this).attr('data-id');

            firebase.database().ref('nodes/' + updateID).on('value', function(snapshot) {
                var values = snapshot.val();
                var updateData = '<div class="form-group">\
		        <label for="label" class="col-md-12 col-form-label">Label</label>\
		        <div class="col-md-12">\
		            <input id="label" type="text" class="form-control" name="label" value="' + values.label + '" required autofocus>\
		        </div>\
		    </div>\
		    <div class="form-group">\
		        <label for="category" class="col-md-12 col-form-label">Category</label>\
		        <div class="col-md-12">\
		            <input id="category" type="text" class="form-control" name="category" value="' + values.category + '" required autofocus>\
		        </div>\
		    </div>';
                $('#updateBody').html(updateData);
                $('body').find('.users-update-record-model').append('<input name="id" type="hidden" value="' + updateID + '">');

            });
        });

        $('.updateUserRecord').on('click', function() {
            var values = $(".users-update-record-model").serializeArray();
            var postData = {
                label: values[0].value,
                category: values[1].value,
            };

            var updates = {};
            updates['/nodes/' + updateID] = postData;

            firebase.database().ref().update(updates);
            // $('body').find('.users-update-record-model').find("input").update();

            $("#update-modal").modal('hide');
        });


        // Remove Data
        $("body").on('click', '.removeData', function() {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
        });

        $('.deleteMatchRecord').on('click', function() {
            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('nodes/' + id).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });
        // $('.remove-data-from-delete-form').click(function() {
        //     $('body').find('.users-remove-record-model').find("input").remove();
        // });