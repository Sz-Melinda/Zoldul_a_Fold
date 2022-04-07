class Ajax {

    constructor() {}

    getAdat(api, tomb, /*callback*/) {

        tomb.splice(0,tomb.length);

        $.ajax({

            url: api,
            type: "GET",

            success: function(result) {

                result.forEach(element => {

                    tomb.push(element)
                });

                /*callback();*/
            }
        });
    }


    
}