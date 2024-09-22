$(function () {
    var baseURL = window.location.origin;
    var table = $('#orderdatatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseURL + "/orders",
        columns: [
            {data: 'orderNumber', name: 'orderNumber'},
            {data: 'customerName', name: 'customerName'},
            {data: 'productName', name: 'productName'},
            {data: 'quantityOrdered', name: 'quantityOrdered'},
            {data: 'priceEach', name: 'priceEach'},
            {data: 'orderDate', name: 'orderDate', orderable: false, searchable: false},
        ]
    });
});

$(function () {
    var baseURL = window.location.origin;
    var table = $('#officedatatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseURL + "/offices",
        columns: [
            {data: 'officeCode', name: 'officeCode'},
            {data: 'city', name: 'customerName'},
            {data: 'addressLine1', name: 'productName'},
            {data: 'country', name: 'quantityOrdered'},
            {data: 'agent', name: 'agent'},
            {data: 'phone', name: 'phone', orderable: false, searchable: false},
        ]
    });
});

// $(function () {
//     var baseURL = window.location.origin;
//     var table = $('#customerdatatable').DataTable({
//         processing: true,
//         serverSide: true,
//         ajax: baseURL + "/customers",
//         columns: [
//             {data: 'customerName', name: 'customerName'},
//             {data: 'contactFirstName', name: 'contactFirstName'},
//             {data: 'phone', name: 'phone'},
//             {data: 'country', name: 'country', orderable: false, searchable: false},
//         ]
//     });
// });

$(function () {
    var baseURL = window.location.origin;
    var table = $('#customerdatatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseURL + "/customers",
        columns: [
            {data: 'customerName', name: 'customerName'},
            {data: 'agent', name: 'agent'},
            {data: 'phone', name: 'phone'},
            {data: 'country', name: 'country', orderable: false, searchable: false},
            {
                data: 'customerNumber', 
                name: 'customerNumber',
                orderable: false,
                searchable: false,
                render: function (data, type, row, meta) {
                    
                    return '<a href="' + baseURL + '/customers/' + data + '/customerDetails" class="view-button">' +
                           '<i class="fa-regular fa-eye"></i> View</a>';
                }
            }
            
        ]
    });
});



new DataTable('#datatable');