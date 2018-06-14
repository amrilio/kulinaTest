//Fungsi retrive atau select item

function retriveListItem()  
{  
  
    $.ajax  
    ({  
        url: _spPageContextInfo.webAbsoluteUrl + "/_api/web/lists/GetByTitle('userReview')/items?$select=id,order_id,
        product_id, user_id, rating, review, created_at, updated_at",  
        type: type,  
        data: data,  
        headers:  
        {  
            "Accept": "application/json;odata=verbose",  
            "Content-Type": "application/json;odata=verbose",  
            "X-RequestDigest": $("#__REQUESTDIGEST").val(),  
            "IF-MATCH": "*",  
            "X-HTTP-Method": null  
        },  
        cache: false,  
        success: function(data)   
        {  
            $("#ResultDiv").empty();  
            for (var i = 0; i < data.d.results.length; i++)   
            {  
                var item = data.d.results[i];  
                $("#ResultDiv").append(item.id + "\t" + item.order_id + "\t" + item.product_id +
                 "\t" + item.user_id + "\t" + item.rating + "\t" + item.review +
                 "\t" + item.created_at + "\t" + item.updated_at +"<br/>");  
            }  
        },  
        error: function(data)  
        {  
            $("#ResultDiv").empty().text(data.responseJSON.error);  
        }  
    });  
}  


//Fungsi Create item

function AddListItem()  
{  
    var id = $("#id").val();  
    var order_id = $("#order_id").val(); 
    var product_id = $("#product_id").val();
    var user_id = $("#user_id").val();
    var rating = $("#rating").val();
    var review = $("#review").val();
    var created_at = $("#created_at").val();
    var updated_at = $("#updated_at").val();
    
    $.ajax  
        ({  
        url: _spPageContextInfo.webAbsoluteUrl + "/_api/web/lists/GetByTitle('userReview')/items",  
        type: "POST",  
        data: JSON.stringify  
        ({  
            __metadata:  
            {  
                type: "SP.Data.TestListItem"  
            },  
            Company: Company,  
            Industry: industryVal  
        }),  
        headers:  
        {  
            "Accept": "application/json;odata=verbose",  
            "Content-Type": "application/json;odata=verbose",  
            "X-RequestDigest": $("#__REQUESTDIGEST").val(),  
            "X-HTTP-Method": "POST"  
        },  
        success: function(data, status, xhr)  
        {  
            retriveListItem();  
        },  
        error: function(xhr, status, error)  
        {  
            $("#ResultDiv").empty().text(data.responseJSON.error);  
        }  
    });  
}  

//Fungsi update item

function updateListItem()  
{  
    var id = $("#id").val();  
    $.ajax  
    ({  
        url: _spPageContextInfo.webAbsoluteUrl + "/_api/web/lists/GetByTitle('userReview')/items(7)", // list item ID  
        type: "POST",  
        data: JSON.stringify  
        ({  
            __metadata:  
            {  
                type: "SP.Data.TestListItem"  
            },  
            id: id  
        }),  
        headers:  
        {  
            "Accept": "application/json;odata=verbose",  
            "Content-Type": "application/json;odata=verbose",  
            "X-RequestDigest": $("#__REQUESTDIGEST").val(),  
            "IF-MATCH": "*",  
            "X-HTTP-Method": "MERGE"  
        },  
        success: function(data, status, xhr)  
        {  
            retriveListItem();  
        },  
        error: function(xhr, status, error)  
        {  
            $("#ResultDiv").empty().text(data.responseJSON.error);  
        }  
    });  
    
    
//Fungsi delete item

function deleteListItem()  
{  
    $.ajax  
    ({  
        url: _spPageContextInfo.webAbsoluteUrl + "/_api/web/lists/GetByTitle('userReview')/items(7)",  
        type: "POST",  
        headers:  
        {  
            "X-RequestDigest": $("#__REQUESTDIGEST").val(),  
            "IF-MATCH": "*",  
            "X-HTTP-Method": "DELETE"  
        },  
        success: function(data, status, xhr)  
        {  
            retriveListItem();  
        },  
        error: function(xhr, status, error)  
        {  
            $("#ResultDiv").empty().text(data.responseJSON.error);  
        }  
    });  
}  
