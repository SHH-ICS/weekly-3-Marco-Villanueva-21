cost = 0
tcost = 0
rep = 0
rep1 = 0
print("Hello! Welcome to Papa's Pizzaria. To start off, would you like a   large or an x-large pizza?") 

while rep <1:  
  size = input("Please spell the size correctly ")
  if size == "large" or size == "Large" or size == "L" or size == "l":
    print("You have chosen a large pizza")
    cost = 6
    rep = 1
  elif size == "xlarge" or size == "Xlarge" or size == "xLarge" or size == "XLarge" or size == "x-large" or size == "X-large" or size == "x-Large" or size == "X-Large" or size == "XL" or size == "xL" or size == "xl":
    print("You have chosen an x-large pizza")
    cost = 10
    rep = 1
  else:
    print("You have not chosen a valid size")
    
while rep1 <1:
  top = input("How many toppings would you like? (0-4) ")
  if top == "0":
    tcost = 0
    rep1 = 1
  elif top == "1":
    tcost = 1
    rep1 = 1
  elif top == "2":
    tcost = 1.75
    rep1 = 1
  elif top == "3":
    tcost = 2.5
    rep1 = 1
  elif top == "4":
    tcost = 3.35
    rep1 = 1
  else:
    print("You have entered an invalid number of toppings")
    
cost = cost + tcost
total = cost*1.13
rounded = round(total, 2)
print("Your total cost is $", rounded)