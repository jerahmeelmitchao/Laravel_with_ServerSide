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
    var table = $('#customerdatatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseURL + "/customers",
        columns: [
            {data: 'customerName', name: 'customerName'},
            {data: 'contactFirstName', name: 'contactFirstName'},
            {data: 'phone', name: 'phone'},
            {data: 'country', name: 'country', orderable: false, searchable: false},
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
//             {
//                 data: 'customerNumber', // assuming 'customerNumber' is your unique ID
//                 name: 'customerNumber',
//                 orderable: false,
//                 searchable: false,
//                 render: function (data, type, row, meta) {
//                     // Generate the HTML for the View button
//                     return '<a href="' + baseURL + '/customers/' + data + '" class="view-button">' +
//                            '<i class="fa-regular fa-eye"></i> View</a>';
//                 }
//             }
//         ]
//     });
// });




new DataTable('#datatable');