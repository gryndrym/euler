# Solution 1 : Using a recursive function 
# Very slow as it calculate all the previous number, instead of using n-1 and n-2 result 
# the fibonacci function is ok to calculate one number, but not for a sum of numbers

# recursive function, return fibonacci number for rank n
fibonacci<-function(n){
  if(n<=1){
    return(n)
  }else(
    return(fibonacci(n-1)+fibonacci(n-2))
  )
}

# sum the even values of fibonacci from rank 2 to rank < maximum
sum_fi<-function(maximum){
  sumfib=0
  iter=2
  fib<-fibonacci(iter)
  while(sumfib<maximum){
    if(fib%%2==0){sumfib=sumfib+fib}
    iter=iter+1
    fib<-fibonacci(iter)    
  }
  return(sumfib)
}

print(sum_fi(4000000))

# result : 4613732


# Solution 2 : calculate all number using n-1 and n-2
# Add the number only if the number is even

fibonacci_even<-function(maximum){
  fn1=0; fn2=1; fib=0; sum=0
  fib=fn1+fn2
  while(fib<maximum){
    fn1=fn2
    fn2=fib
    if(fib%%2==0){sum=sum+fib}
    fib=fn1+fn2
  }
  return(sum)
}

print(fibonacci_even(4e6))

# result : 4613732


# Solution 3 : equivalent to solution 2 but using vectors in R
# one vector to store the fibonacci number and one vector to store the even number
# then calculate the sum of the even vector

sum_even_fibonacci<-function(maximum){
  fib<-c(1,2)
  even<-c(2)
  fibn<-sum(fib[1], fib[2])
  n<-4
  while(fibn<maximum){
    if(fibn%%2==0){even<-c(even,fibn)}
    fib<-c(fib, fibn)
    fibn<-sum(fib[n-1], fib[n-2])
    n<-n+1
  }
  return(sum(even))  
}


# Solution 4 : equivalent to solution 4 but using one vector
# the sum of even number is calculated from the fibonacci vector

sum_even_fibonacci<-function(maximum){
  fib<-c(1,2)
  fibn<-sum(fib[1], fib[2])
  n<-4
  while(fibn<maximum){
    fib<-c(fib, fibn)
    fibn<-sum(fib[n-1], fib[n-2])
    n<-n+1
  }
  return(sum(fib[fib %% 2 == 0]))  
}

print(sum_even_fibonacci(4e6))

