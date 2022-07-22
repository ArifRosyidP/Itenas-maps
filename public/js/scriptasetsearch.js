// $('#search-button').on('click',function()
// {
//     $.ajax({
//         url: 'http://api.itenas.ac.id:8080/aset-by-kodegedung',
//         type: 'get',
//         dataType: 'json',
//         data: {
//             'apikey' : '284a13407bb5660a4b725312af37b814186056c2',
//             'kodegedung' : $('#noged').val()
//         },
//         success: function (result) {
//             // console.log(result);
//             if (result.Response == "True") {
//                 let asets = result.data;

//                 console.log(asets)
//             }else{
//                 $('#aset-list').html(`
//                     <div class="col">
//                     <h1 class="text-center">` + result.Error + `</h1>
//                     </div>
//                 `)
//             }
//         }
//     });
// })