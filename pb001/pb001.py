# multiple 1 - classic solution
# Search all the numbers that are multiples of the list

def multiple1(multiples, maximum):
    naturalNumbers = []
    for numberToTest in range(maximum):
        for multiple in multiples:
            if numberToTest%multiple == 0:
                naturalNumbers.append(numberToTest)
                break
    return naturalNumbers

print(sum(multiple1([3,5], 1000)))


# multiple 2 - generate the solution
# multiply all the number from 1 to maximum by the list of multiple to test
# could be optimised by calculating from one to maximum divided by the biggest number in the list

def multiple2(multiples, maximum):
    return [multiple*i for multiple in multiples for i in range(maximum) if multiple*i < maximum]

# Convert the list to a dictionnary to remove double values
print(sum(set(multiple2([3,5], 1000))))

