  const circle={
    radius: 7,
    location: {
        x: 1,
        y: 3
    },

draw: function(){
    console.log('Hello Word');
}
};

circle.draw();

// factory
//////
function creatCircle(radius){
     return{
        radius,

        draw: function(){
            console.log('draw')
        }
    
     };
}

const circle = creatcircle(1);
circle.draw();