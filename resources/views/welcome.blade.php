<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/sweetalert_custom.min.css') }}"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            div.case{
                box-shadow: 0px 45px 36px -2px #888;
                border-radius: 10px;
            }

            button{
                cursor: pointer;
            }
            body {
                margin: 0;
                min-width: 250px;
            }


            ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            li {
                padding-right: 50px!important;
            }

            ul li {
                cursor: pointer;
                position: relative;
                padding: 12px 8px 12px 40px;
                background: #eee;
                font-size: 18px;
                transition: 0.2s;
                border-radius: 5px;

                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }



            ul li:nth-child(odd) {
                background: #f9f9f9;
            }



            ul li:hover {
                background: #ddd;
            }


            ul li.checked-1 {
                background: #888;
                color: #fff;
                text-decoration: line-through;
            }



            ul li.checked-1::before {
                content: '';
                position: absolute;
                border-color: #fff;
                border-style: solid;
                border-width: 0 2px 2px 0;
                top: 10px;
                left: 16px;
                transform: rotate(45deg);
                height: 15px;
                width: 7px;
            }


            .close {
                position: absolute;
                right: 0;
                top: 0;
                padding: 12px 16px 12px 16px
            }

            .close:hover {
                background-color: #f44336;
                color: white;
            }


            .header {
                background-color: #00b867;
                padding: 30px 40px;
                color: white;
                text-align: center;
                border-radius: 10px 10px 0 0;
            }


            .header:after {
                content: "";
                display: table;
                clear: both;
            }



            input {
                border: none;
                width: 75%;
                padding: 10px;
                float: left;
                font-size: 16px;
                box-sizing: border-box;
                height: 44px;
                
            }

            #myInput {
                border-radius: 5px 0 0 5px;
            }


            .addBtn {
                padding: 10px;
                box-sizing: border-box;
                width: 25%;
                background: #d9d9d9;
                color: #555;
                float: left;
                text-align: center;
                font-size: 16px;
                cursor: pointer;
                transition: 0.3s;
                border-radius: 0 5px 5px 0;
            }

            .addBtn:hover {
                background-color: #bbb;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <!---Simple Template-->
            <!--<div>
                <h1>todo list</h1>

                @foreach ($listItems as $listItem)
                    <form action="{{ route('completed', $listItem->id) }}" method="post" accept-charset="utf-8">
                        @csrf
                        <div><p>Item: {{ $listItem->name }}
                            <button style="margin-left: 20px; padding: 5px; float: right;">Mark as Completed</button></p></div>
                    </form>
                @endforeach
                <br>
                <hr>
                <form action="{{ route('save') }}" method="post" accept="utf-8">
                    @csrf
                    <label for="listItem">New Todo Item</label><br>
                    <input type="text" name="listItem" style="border: 5px solid #909499;"/>
                    <button name="save" value="true" style="padding: 5px">Save List</button>
                </form>
            </div>-->
            
            <!--New Template-->
            <div class="case">
                <div id="myDIV" class="header">

                    <h2 style="margin:10px 10px 20px 10px"> Tea's Todo List</h2>
                    @csrf
                    <input type="text" id="myInput" placeholder="Title...">
                    
                    <span onclick="newElement()" class="addBtn">Add</span>
                    
                    </div>
                    
                    
                    <ul id="myUL">
                    

                      <!-- Demo Lists
                        <li>Hit the gym</li>
                        <li class="checked-1">Pay bills</li>
                        <li>Clean the Car</li>
                        <li>Buy Groceries</li>
                        <li>Read a book</li>
                        <li>Organize Home</li>-->
                    
                        <!--Fetch all to-do lists from database (a loop through)-->
                    @foreach ($listItems as $listItem)
                        <li id="{{ $listItem->id }}" class="checked-{{ $listItem->is_complete }}">{{ $listItem->name }}<span style="right: 35px;" class="close" onclick="completed({{ $listItem->id }})">✔</span><span class="close" onclick="kill({{ $listItem->id }})">🗑</span></li>
                    @endforeach
                    
                    
                <script> 

                    //Get all todo lists
                    /*
                        var myNodelist = document.getElementsByTagName("LI");
                        var i;
                        for(i=0; i < myNodelist.length;i++){
                            //Create a span and append the 'close' class
                            var span=document.createElement("SPAN");
                            var txt=document.createTextNode("\u00D7");
                            span.className = "close";
                            span.appendChild(txt);
                            myNodelist[i].appendChild(span);
                        }
                    */
                    
                    //Get all lists with 'close' class in the span
                    var close = document.getElementsByClassName("close");
                    var i;
                    
                    //Add a 'click' event listener to turn off visibility/delete
                    /*for(i=0; i < close.length;i++){
                        close[i].onclick = function() {
                            var div = this.parentElement;
                            div.style.display = "none";
                        }
                    }*/

                    function kill(id) {
                        var div = document.getElementById(id);
                        
                        //Display and alert first for confirmation
                        axiosAlert('Delete List', 'Sure you wanna delete?', div, 'delete/'+id, 0);

                        //Without need for alert or
                        /*
                            axios.post("delete/"+id).then(function (res) {
                                var response = res.data;
                                if(response.flag == 1) {
                                    div.style.display = "none";
                                    setTimeout(() => {
                                        //location.reload();
                                    }, 1000);
                                }
                            })
                            .catch(function (error) {});
                        */
                    }
                    
                    //List 'check' toggler
                    /*
                        var list=document.querySelector('ul');
                        list.addEventListener('click', function(ev) {
                            if (ev.target.tagName === 'LI') {
                                ev.target.classList.toggle('checked-1');
                            }
                        }, false);
                    */

                    function completed(id) {
                        //Without need for alert or
                        var div = document.getElementById(id);
                        axios.post("completed/"+id).then(function (res) {
                            var response = res.data;
                            if(response.flag == 1) {
                                //Disable list from display
                                div.classList.toggle('checked-1');
                                setTimeout(() => {
                                    //location.reload();
                                }, 1000);
                            }
                        })
                        .catch(function (error) {});
                    }
                    

                    //Listen when 'enter' is clicked
                    window.onkeyup = (e) => {
    			        if(e.keyCode == 13){
                            newElement();
                        }
                    }
                    
                    //Append new list
                    function newElement() {
                        var li=document.createElement("li");
                        
                        var inputValue = document.getElementById("myInput").value;

                        //Prevent white space at the start and finish
                        inputValue = inputValue.trim();

                        var data = {
                            //Found jQuery easier to get the csrf token so I included the library 👍🏻
                            '_token'    : $('input[name="_token"]').val(),
                            'listItem'  : inputValue,
                            'save'      : true
                        }

                        axios.post("{{ route('save') }}", data).then(function (res) {
                            var response = res.data;
                            if(response.flag == 1) {   
                                /*
                                    setTimeout(() => {
                                        //location.reload();
                                    }, 1000);
                                */
                                var t = document.createTextNode(inputValue);

                                var id = response.id;

                                console.log(id);
                                li.setAttribute('id', id);
                                li.setAttribute('class', 'checked-0');
                                li.appendChild(t);
                                if (inputValue === '') {
                                    //Prevent null inputs (extra checks)
                                    alert("You must write something!");
                                    return;
                                }
                                
                                document.getElementById("myUL").appendChild(li);
                                document.getElementById("myInput").value = "";
                                
                                //First span containing icon to deactivate the list
                                var span1=document.createElement("SPAN");
                                var txt=document.createTextNode("✔");
                                
                                span1.className = "close";
                                span1.style.right = '35px';
                                span1.appendChild(txt);
                                
                                //Add the function to 'deactivated the list' to the 'onclick' attribute
                                span1.setAttribute('onclick', 'completed('+id+')');
                                
                                //Second span containing icon to delete the list
                                var span2=document.createElement("SPAN");
                                var txt=document.createTextNode("🗑");
                                
                                span2.className = "close";
                                span2.appendChild(txt);
                                
                                //Add the function to 'delete the list' to the 'onclick' attribute
                                span2.setAttribute('onclick', 'kill('+id+')');

                                //Append
                                li.appendChild(span1);
                                li.appendChild(span2);
                            }
                        })
                        .catch(function (error) {});                        
                    }
                    
                </script>

            </div>
        </div>
    </body>
    <script>
        base_url = './'
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/axios.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
    <script>
        /* ================ SHOW NOTIFICATION ================ */
        function showToast(type, message) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                showConfirmButton: false,
                timer: 4000,
                customClass: {
                    container: 'custom-swal-container',
                    popup: 'custom-swal-popup custom-swal-popup-'+type,
                    header: 'custom-swal-header',
                    title: 'custom-swal-title',
                    closeButton: 'custom-swal-close-button',
                    image: 'custom-swal-image',
                    content: 'custom-swal-content',
                    input: 'custom-swal-input',
                    actions: 'custom-swal-actions',
                    confirmButton: 'custom-swal-confirm-button',
                    cancelButton: 'custom-swal-cancel-button',
                    footer: 'custom-swal-footer'
                }
            });
            Toast.fire({
                type: type,
                html: message
            })
        }
        /* ================ SHOW NOTIFICATION ================ */
    </script>
    <script>
        'use strict';

        /* ============== AXIOS INTERCEPTORS start=================== */
        axios.defaults.baseURL = base_url;

        // Add a request interceptor
        axios.interceptors.request.use(function (config) {
            // start progress bar
            Pace.restart();
            return config;
        }, function (error) {
            return Promise.reject(error);
        });

        // Add a response interceptor

        // reload the page in case of consistent failed requests
        var failed_count = 0;
        axios.interceptors.response.use(function (response) {
            // catch php error
            if(/<p>/i.test(response.data)) {
                showToast("warning", "Oops! Something went wrong. Try again.");
            }

            // show validation and custom errors
            if(response.data.flag == 0) {
                failed_count++;

                // show only if any message
                if(response.data.msg !== null) {
                    showToast("error", response.data.msg);
                }

                // set input fields in error state if any
                if(response.data.error_fields.length > 0) {
                    $.each(response.data.error_fields, (index, item) => {
                        $("input[name*='"+item+"'], select[name*='"+item+"'], textarea[name*='"+item+"']").closest('.form-group').addClass('has-danger');
                        $("input[name*='"+item+"'], select[name*='"+item+"'], textarea[name*='"+item+"']").addClass('is-invalid');
                    });
                }
                
            } else {
                // reset failed request counter
                failed_count = 0;

                // show success messages
                // show only if any message
                if(response.data.msg !== null) {
                    showToast("success", response.data.msg);
                }
            }

            // reload page after 10 failed attempts
            if(failed_count == 10)
                location.reload();
            
            return response;
        }, function (error) {
            // catch CSRF error and reload 
            if(/403/i.test(error)) {
                location.reload();
            }
            
            return Promise.reject(error);
        });
        /* ============== AXIOS INTERCEPTORS start=================== */
    </script>
    <script>
        /* ================ AXIOS CONFIRM ALERT ================ */
        function axiosAlert(title, text, data, url, redirect) {
            Swal.fire({
                title: title,
                html: text,
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: title,
                cancelButtonText : "Cancel",
            }).then((result) => {
                if (result.value) {
                    //console.log(result.value);
                    //var formData = toFormData(data);
                    //axios.post(url, formData)
                    axios.post(url)
                    .then(function (res) {
                        var response = res.data.data;
                        if(res.data.flag == 1) {
                            Swal.fire("Info!", res.data.msg, "info")
                            data.style.display = "none";
                            if(typeof redirect === "undefined") {
                                setTimeout(() => {
                                    //location.reload();    
                                }, 500);
                            } else {
                                setTimeout(() => {
                                    //window.location.href = redirect;
                                }, 500);
                            }
                        }
                    })
                    .catch(function (error) {});
                }
            });
        }
        /* ================ AXIOS CONFIRM ALERT ================ */
    </script>
</html>
