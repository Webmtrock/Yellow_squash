$(document).ready(function() {
    var planCount = 1;

    $('#addPlan').click(function() {
        planCount++;

        var newPlanField = '<div class="form-group mb-2 plan-group">';
        newPlanField += '<div><label>Plan ' + planCount + '</label> <button type="button" class="btn btn-danger delete-plan">Delete</button></div>';
        newPlanField += '<label>Enter Plan</label>';
        newPlanField += '<input type="text" class="form-control" name="add_plans['+planCount+'][add_plans]">';
        newPlanField += '</div>';

        $('#planFields').append(newPlanField);
    });

    // Event delegation for dynamically added delete buttons
    $('#planFields').on('click', '.delete-plan', function() {
        $(this).closest('.plan-group').remove();
        planCount--; // Decrement planCount
        // Update plan numbers
        $('.plan-group').each(function(index) {
            $(this).find('label:first').text('Plan ' + (index + 1));
        });
    });
});


 $(document).ready(function() {
            var planCount = 0;

            $('#addPlanType').click(function() {
                planCount++;

                var newPlanField = '<div class="form-group mb-2 plan-group">';
                newPlanField += '<div><label>Plan ' + planCount + '</label> <button type="button" class="btn btn-danger delete-plan">Delete</button></div>';
                newPlanField += '<label>Enter PlanType</label>';
                newPlanField += '<input type="text" class="form-control" name="planType[]">';
                newPlanField += '<label>Discount</label>';
                newPlanField += '<input type="text" class="form-control" name="discount[]">';
                newPlanField += '<label>Price</label>';
                newPlanField += '<input type="text" class="form-control" name="price[]">';
                newPlanField += '</div>';

                $('#planTypeFields').append(newPlanField);
            });

            // Event delegation for dynamically added delete buttons
            $('#planTypeFields').on('click', '.delete-plan', function() {
                $(this).closest('.plan-group').remove();
                planCount--; // Decrement planCount
                // Update plan numbers
                $('.plan-group').each(function(index) {
                    $(this).find('label:first').text('Plan ' + (index + 1));
                });
            });
        });
 $(document).ready(function() {
            var planCount = 0;

            $('#addstaticsession').click(function() {
                planCount++;

                var newPlanField = '<div class="form-group mb-2 plan-group">';
                newPlanField += '<div><label>Plan ' + planCount + '</label> <button type="button" class="btn btn-danger delete-plan">Delete</button></div>';
                newPlanField += '<label>Session Tittle</label>';
                newPlanField += '<input type="text" class="form-control" name="planType[]">';
                newPlanField += '<label>Session Duration</label>';
                newPlanField += '<input type="text" class="form-control" name="discount[]">';
                newPlanField += '<label>Session Description</label>';
                newPlanField += '<input type="text" class="form-control" name="price[]">';
                newPlanField += '</div>';

                $('#staticsessionfields').append(newPlanField);
            });

            // Event delegation for dynamically added delete buttons
            $('#staticsessionfields').on('click', '.delete-plan', function() {
                $(this).closest('.plan-group').remove();
                planCount--; // Decrement planCount
                // Update plan numbers
                $('.plan-group').each(function(index) {
                    $(this).find('label:first').text('Plan ' + (index + 1));
                });
            });
        });
    $(document).ready(function() {
            var planCount = 0;

            $('#addfaq').click(function() {
                planCount++;

                var newPlanField = '<div class="form-group mb-2 plan-group">';
                newPlanField += '<div><label>Plan ' + planCount + '</label> <button type="button" class="btn btn-danger delete-plan">Delete</button></div>';
                newPlanField += '<input type="text" placeholder="Question" class="form-control" name="planType[]">';
                newPlanField += '<input type="text" placeholder="Answer" class="form-control" name="discount[]">';
                newPlanField += '</div>';

                $('#faqfields').append(newPlanField);
            });

            // Event delegation for dynamically added delete buttons
            $('#faqfields').on('click', '.delete-plan', function() {
                $(this).closest('.plan-group').remove();
                planCount--; // Decrement planCount
                // Update plan numbers
                $('.plan-group').each(function(index) {
                    $(this).find('label:first').text('Plan ' + (index + 1));
                });
            });
        });