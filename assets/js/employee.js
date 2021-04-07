$(document).ready(function(){
    var base_url = $('.base_url').val();

    var table_user = $("#datatable").DataTable({
        "processing": false,
        "serverSide": true,
        "order": [[0,'desc']],
        "columns":[
             {"data":"employee_id"},
             {"data":"employee_name"},
             {"data":"employee_address"},
             {"data":"employee_birthdate"},
             {"data":"employee_position"},
             {"data":"employee_contact_number"},
             {"data": "employee_image","render":function(data, type, row, meta){
                var str = '';
                str += '<img src="'+base_url+'upload/'+row.employee_date_uploaded+'/'+row.employee_image+'" height="50" width="50">';
                return str;
                }
             },   
             {"data": "employee_id","render":function(data, type, row, meta){
                       var str = '';
                    //    str += '<div class="btn-group">';
                    //           if(row.status == '1'){
                    //                str += '<a href="" class="btn btn-warning btn-sm employee_action_status" data-id="'+row.employee_id+'" data-status="0"><i class="fa fa-lock"></i> Deactivate</a>';
                    //           } else{
                    //                str += '<a href="" class="btn btn-success btn-sm employee_action_status" data-id="'+row.employee_id+'" data-status="1"><i class="fa fa-unlock"></i> Activate</a>';
                    //           }
                       str += '<div class="btn-group">';
                            str += '<a href="" class="btn btn-danger btn-sm delete_employee_action" data-id="'+row.employee_id+'"><i class="now-ui-icons ui-1_simple-remove"></i></a>';
                            str += '<a href="" data-toggle="modal" data-target="#EditEmployee" class="btn btn-primary btn-sm employee_details_action" data-id="'+row.employee_id+'" data-employee_name="'+row.employee_name+'" data-employee_address="'+row.employee_address+'" data-employee_birthdate="'+row.employee_birthdate+'" data-employee_position="'+row.employee_position+'" data-employee_contact_number="'+row.employee_contact_number+'"><i class="now-ui-icons design-2_ruler-pencil"></i></a>';   
                            str += '<a href="" class="btn btn-primary btn-sm employee_generate_id" data-id="'+row.employee_id+'" data-employee_name="'+row.employee_name+'" data-employee_address="'+row.employee_address+'" data-employee_birthdate="'+row.employee_birthdate+'" data-employee_position="'+row.employee_position+'" data-employee_contact_number="'+row.employee_contact_number+'"><i class="now-ui-icons business_badge"></i></a>';   
                            //str += '<a href="" class="btn btn-primary btn-sm employee_certificate_action" data-id="'+row.employee_id+'" data-employee_fname="'+row.employee_fname+'" data-employee_lname="'+row.employee_lname+'" data-birthdate="'+row.employee_birthdate+'" data-age="'+row.employee_age+'" data-address="'+row.employee_address+'" data-gender="'+row.employee_gender+'"><i class="fa fa-print"></i></a>';   
                       str += '</div>';
                       return str;
                  }
             },
        ],
        "ajax": {
             "url": base_url+"employee/get_employee",
             "type": "POST"
        },
        "columnDefs": [
             {
                  "targets": [],
                  "orderable": false,

              },
         ],
         
   });

   

   $(document).on('click','.delete_employee_action',function(e){
        e.preventDefault();
        var id = $(this).attr('data-id');
        Swal.fire({
            title: "Are you sure?",
            text: "You will not be able to recover this brand",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1A6519",
            confirmButtonText: "Yes",
        }).then((confirm) => {
            if (confirm.value) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                  ),
                $.ajax({
                    url:base_url+'employee/delete',
                    type:'post',
                    //dataType:'json',
                    data: {
                        'id': id
                    },
                    success: function(res){
                        $.toast({
                            heading: 'Successfully Deleted',
                            text: res.message,
                            position: 'top-right',
                            loaderBg: '#178472',
                            icon: res.type,
                            hideAfter: 2000,
                            stack: 6
                        })
                        ajax.reload();
                        
                    }
                })
            }
        }); 
    });


        $(document).on('click','.employee_action_status',function(e){
            e.preventDefault();
            var id = $(this).attr('data-id');
            var status = $(this).attr('data-status');
            Swal.fire({
                title: "Are you sure?",
                text: "This account will be deactivate",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#1A6519",
                confirmButtonText: "Yes",
            }).then((confirm) => {
                    if (confirm.value) {
                        if(status == 1){
                            Swal.fire(
                                'Activated!',
                                'Your file has been active.',
                                'success'
                            )
                        }
                        if(status == 0){
                            Swal.fire(
                                'Deactivated!',
                                'Your file has been deactivate.',
                                'success'
                            )
                        }
                            $.ajax({
                                url:base_url+'employee/deactivate_users',
                                type:'post',
                                //dataType:'json',
                                data: {
                                    'id': id,
                                    'status': status
                                },
                                success: function(res){
                                    $.toast({
                                        heading: 'Deactivate Successfully',
                                        text: res.message,
                                        position: 'top-right',
                                        loaderBg: '#178472',
                                        icon: res.type,
                                        hideAfter: 2000,
                                        stack: 6
                                    })
                                    ajax.reload();
                                }
                            })
                    }
            }); 
        });
        

        //if mo upload og pic using file upload e off ang content data and process data
        //getting data
        $(document).on('click','.employee_details_action',function(e){
            e.preventDefault();
            var id = $(this).attr('data-id');
            var employee_name = $(this).attr('data-employee_name');
            var employee_address = $(this).attr('data-employee_address');
            var employee_birthdate = $(this).attr('data-employee_birthdate');
            var employee_position = $(this).attr('data-employee_position');
            var employee_contact_number = $(this).attr('data-employee_contact_number');

            $('input[name="employee_id"]').val(id);
            $('input[name="employee_name"]').val(employee_name);
            $('input[name="employee_address"]').val(employee_address);
            $('input[name="employee_birthdate"]').val(employee_birthdate);
            $('input[name="employee_position"]').val(employee_position);
            $('input[name="employee_contact_number"]').val(employee_contact_number);
            $('.modal-title').html('Update Employee');
            $('.action-btn').html('Update');
        });
        //Edit Employee
        $('#EditEmployee form').on('submit', function(e){
            e.preventDefault();
            const self = $(this);
            $.ajax({
                url: base_url+'employee/edit_employee',
                type: 'POST',
                dataType: 'json',
                data: self.serialize(),
                success: function(res){
                    Swal.fire({
                        title: "Saved",
                        text: "Successfully Update",
                        type: "success",
                        //showCancelButton: true,
                        confirmButtonColor: "#1A6519",
                        confirmButtonText: "Yes",
                      });
                      $('#EditEmployee').modal('hide');
                      table_user.ajax.reload();
                }
            })
        })

        //Add Employee
        // $('#addEmployee form').on('submit', function(e){
        //     e.preventDefault();
        //     const self = $(this);
        //     //var user_id = $('.user_id').val();
        //     $.ajax({
        //         url: base_url+'employee/insert',
        //         type: 'POST',
        //         dataType: 'json',
        //         data: self.serialize(),
        //         success: function(res){
        //             Swal.fire({
        //                 title: "Saved",
        //                 text: "Successfully Update",
        //                 type: "success",
        //                 //showCancelButton: true,
        //                 confirmButtonColor: "#1A6519",
        //                 confirmButtonText: "Yes",
        //               });
        //               $('#addEmployee').modal('hide');
        //               setInterval( function () {
        //                          table_user.ajax.reload();
        //                   }, 3000 );
        //               //table_user.ajax.reload();
        //         }
        //     })
        // })

        //Add Employee with Image
        $(document).on('submit', '#addForm' , function(e){
            e.preventDefault();
            //console.log(e);
            let formdata = new FormData($('#addForm')[0]);
           
            const self = $(this);
            $.ajax({
                url: base_url+'employee/insert',
                type: 'POST',
                dataType: 'json',
                contentType: false,
                processData: false,
                data: formdata,
                success: function(res){
                    Swal.fire({
                        title: "Saved",
                        text: "Successfully Added",
                        type: "success",
                        //showCancelButton: true,
                        confirmButtonColor: "#1A6519",
                        confirmButtonText: "Yes",
                      });
                      $('#addEmployee').modal('hide');
                      table_user.ajax.reload();
                }
            });
        });


        $(document).on('click','.employee_generate_id',function(e){
            e.preventDefault();
            var id = $(this).attr('data-id');
           
            let formdata = {id : id};
            $.ajax({
                url:base_url+'employee/generate_id/'+id,
                method:'POST',
                data: formdata,
                success: function(res){
                    console.log(res);
                    window.open(base_url+'employee/generate_id/'+id);
                    //window.location.href = 'employee/generate_id/'+id;
                }
            }) 
           
        });

        setInterval( function () {
            table_user.ajax.reload();
        }, 3000 );
});
