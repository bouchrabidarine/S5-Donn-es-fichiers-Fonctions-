
function  calculerSurface(longueur, largeur) {
    return longueur * largeur ;
}
function estGrand(surface){
    return surface>=100;
}
 let surface = calculerSurface(12, 10);
 let surfaceestgrande = estGrand(surface);

 console.log(surface+"m2")
 console.log(surfaceestgrande)
