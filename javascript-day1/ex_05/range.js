function range( start, end, step ) 
{
    var result = [];
    if ( step == undefined )
      step = 1;
    if(start>end)
    {
      for ( var i = start; i >=end; i+=step ) {
      result.push( i );
    }
  }
  else
  {
     for ( var i = start; i <=end; i+=step)
     {
      result.push( i );
    }
  }
  return result;
}
console.log(range(1, 10, 2));
console.log(range(19, 22));
console.log(range(5, 2, -1));