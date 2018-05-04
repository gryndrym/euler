"""for c in range(1000):
    for b in range(c):
        for a in range (b):
            if(a**2 + b**2 == c**2 and a + b + c == 1000):
                print(f"a = {a}, b = {b}, c = {c}, a*b*c = {a*b*c}")
"""

for b in range(1000):
    for a in range(b-1):
        c=1000-b-a
        if(a**2 + b**2 == c**2 and b < c ):
            print(f"a = {a}, b = {b}, c = {c}, a*b*c = {a*b*c}")

