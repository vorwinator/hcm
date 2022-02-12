$(document).ready(function() {
    $('#client').DataTable({
        'lengthChange':false,
        searching:false,
        paging:false,
        info:false,
        ordering:false,
        responsive:true,
        columdDefs:[
            { responsivePriority: 1, targets: [0,1,2,3] },
            { responsivePriority: 2, targets: [3] },
            { responsivePriority: 3, targets: [3,4,5,6,7] }
        ],
    });

    $('#clients').DataTable({
        'lengthChange':false,
        aoColumnDefs:[
            {
                bSortable:false,
                aTargets:[-1]
            }
        ],
        info:false,
        responsive:true
    });

    $('#overallClientHostingInfo').DataTable({
        'lengthChange':false,
        searching:false,
        paging:false,
        info:false,
        ordering:false,
        responsive:true,
        columdDefs:[
            { responsivePriority: 1, targets: [0,1,2] },
            { responsivePriority: 3, targets: [4,5] }
        ],
    });

    $('#paymentInfo').DataTable({
        'lengthChange':false,
        searching:false,
        paging:false,
        info:false,
        ordering:false,
        responsive:true
    });

    $('#servicesToBuy').DataTable({
        'lengthChange':false,
        info:false,
        searching:true,
        paging:true,
        "pageLength":10,
        responsive:true,
        aoColumnDefs:[
            {
                bSortable:false,
                aTargets:[-1]
            }
        ],
    });

    $('#serviceDetailsPage').DataTable({
        'lengthChange':false,
        info:false,
        searching:false,
        paging:false,
        "pageLength":10,
        responsive:true,
        aoColumnDefs:[
            {
                bSortable:false,
                aTargets:[-1]
            }
        ],
    })

    $('#hostingAccounts').DataTable({
        responsive:true,
        info:false,
        lengthChange:false,
    })

    $('#services').DataTable({
        'lengthChange':false,
        aoColumnDefs:[
            {
                bSortable:false,
                aTargets:[-1]
            }
        ],
        info:false,
        pageLength:10,
        responsive:true
    });

    $('#purchasedServices').DataTable({
        'lengthChange':false,
        searching:true,
        "pageLength":10,
        info:false,
        responsive:true,
        aoColumnDefs:[
            {
                bSortable:false,
                aTargets:[-1]
            }
        ],
    });

    $('#whoPurchasedService').DataTable({
        'lengthChange':false,
        info:false,
        searching:true,
        paging:true,
        responsive:true,
        "pageLength":10,
        aoColumnDefs:[
            {
                bSortable:false,
                aTargets:[-1]
            }
        ],
    });



$('#hostings').DataTable({
    'lengthChange':false,
    aoColumnDefs:[
        {
            bSortable:false,
            aTargets:[-1]
        }
    ],
    info:false,
    responsive:true
});

$('#purchasedService').DataTable({
    'lengthChange':false,
    info:false,
    searching:false,
    paging:false,
    responsive:true,
    aoColumnDefs:[
        {
            bSortable:false,
            aTargets:[-1]
        }
    ],
});

$('#hosting').DataTable({
    'lengthChange':false,
    searching:false,
    paging:false,
    info:false,
    ordering:false,
    responsive:true,
});

$('#domain').DataTable({
    'lengthChange':false,
    searching:false,
    paging:false,
    info:false,
    ordering:false,
    responsive:true,
});

});
