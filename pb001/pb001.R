multipleof<-function(multiples, maximum){
  result=0
  for(value in 1:maximum-1){
    for(mult in multiples){
      if(value%%mult==0){
        result<-result+value
        break # pour ne pas compter deux fois un nombre multiple de 3 et 5
      }
    }
  }
  return(result)
}

multipleof(c(3,5),1000)

# result = 233168