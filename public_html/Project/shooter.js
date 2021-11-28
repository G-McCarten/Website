const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')

canvas.width = innerWidth
canvas.height = innerHeight

const scoreEl = document.querySelector('#scoreEl')
let score = 0
class Player{
    constructor(x, y, radius, color){
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
    }

    draw(){
        c.beginPath
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        c.fillStyle = this.color
        c.fill()
    }
}

const player = new Player(100, 100, 30, 'blue')
player.draw()

addEventListener('click', () => {
    console.log("go")
    score+=10
    scoreEl.innerHTML = score
})

//var test
//function endGame(){
//    test = setTimeout(function() {console.log("game over"); score=0; scoreEl.innerHTML = score }, 100)
//}

$(document).ready(function(){
    $('#myForm').submit(function(){
        var data = $(this).serialize();
        console.log(data)
        $.ajax({
            url: "save_score.php",
            type: "POST",
            data: data,
            success: function( data )
            {
                alert( data );
            },
            error: function(){
                alert('ERRO');
            }
        });

        return false;
    });
});

$(document).ready(function() {
	$('#endGame').on('click', function() {
        console.log("clicked");
		$("#endGame").attr("disabled", "disabled");
		var finalScore = score;
        console.log(finalScore)
        if(score!=""){
			$.ajax({
				url: "save_score.php",
				type: "POST",
				data: {
					score: finalScore				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						//$("#endGame").removeAttr("disabled");
						//$('#fupForm').find('input:text').val('');
						//$("#success").show();
						//$('#success').html('Data added successfully !'); 			
                        console.log("success");			
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});