


var nbreAfrique, paris, senegal;
var locations = [];
var d = 0;
$(function(){

    $.getJSON("hashtag.php").then(function(response){
        // console.log(response);
        // let des = response; 
        // $(".u").remove()
        // let n = 1;
        for (let i = 0; i < response.length; i++) {
             let option = "<option value="+response[i].name+">"+response[i].name+"</option>"
            $("#tags").append(option);
        }
        // console.log(locations);
        console.log(response);
    }).fail(function(r,f){
        console.log(r)
        console.log(f)
    })


    $("#btn").click(function() {
        let hashtag = $("select option:selected").val();
        let totalTweets = 0;
        let porteHashtag = 0;
        let n = 1;
        let names = []
        $.getJSON("index.php?id="+hashtag).then(function(response){
            // console.log(response);

            if(response.length < 0){
                alert("Aucun resultat n'a ete trouve pour ce hashtag #"+hashtag)
            }else{

                let data = []; 
                $(".u").remove()
                for (let i = 0; i < response.length; i++) {
                let impact = response[i].followers * response[i].tweets
                totalTweets += response[i].tweets
                porteHashtag += impact;    
                $("#traitement").empty();
                // let t = {
                //     x:  0.01 *response[i].followers,
                //   //  y:response[i].tweets,
                //     // r:,
                // }

                names.push(response[i].name)
                data.push(impact * 0.01);
                let tr = " <tr class='u'>"+
                "<td>"+(n++)+"</td>"+
                "<td>"+response[i].name+"</td>"+
                "<td><span class='badge bg-danger '>"+response[i].followers+"</span></td>"+
                "<td><span class='badge bg-danger'>"+response[i].tweets+"</span></td>"+
                "<td><span class='badge bg-info'>"+impact+"</span></td>"
                "</tr>"   
                
                $("#table").append(tr);
            }
            $("#title").text("Resultat pour le hastag #"+hashtag)
            $('#nbreUser').text((n-1)+" Utilisateur(s)");
            $('#nbreTweets').text(totalTweets+" Tweet(s)");
            $('#porte').text(" Porte pour "+porteHashtag+" utilisateur(s)");
            
            var traitement = document.getElementById("traitement").getContext('2d');
            var x = data
            console.log(x)
            var traitement = new Chart(traitement, {
                type: 'polarArea',
                data: {
                    labels:names,
                    datasets: [{
                        label: "User ",
                        data:x,
                        backgroundColor: [
                            'red',
                            // '#FF2C37',
                            // '#F0E523',
                            // '#F08A26',
                            // '#ED46DA',
                            // '#E5DA9B',
                            // '#1F2E1A'
                        ],
                        borderColor: [
                            'red',
                            // '#FF2C37',
                            // '#F0E523',
                            // '#F08A26',
                            // '#ED46DA',
                            // '#E5DA9B',
                            // '#1F2E1A'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
            console.log(locations);
            console.log(response);
        }
        }).fail(function(r,f){
            console.log(r)
            console.log(f)
        })

    })

})