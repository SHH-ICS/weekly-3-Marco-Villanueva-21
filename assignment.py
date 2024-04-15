# initialize cost and looping variables
cost = 0
rep = 0
rep1 = 0
print("Hello! Welcome to Papa's Pizzaria. To start off, would you like a large or an x-large pizza?") 

#enter a loop that asks the user for the desired size and loops back when an invalid input is detected
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

#enter another loop that asks the user the desired number of toppings and loops back when an invalid input is detected
while rep1 <1:
  top = input("How many toppings would you like? (0-4) ")
  if top == "0":
    cost = cost + 0
    rep1 = 1
  elif top == "1":
    cost = cost + 1
    rep1 = 1
  elif top == "2":
    cost = cost + 1.75
    rep1 = 1
  elif top == "3":
    cost = cost + 2.5
    rep1 = 1
  elif top == "4":
    cost = cost + 3.35
    rep1 = 1
  else:
    print("You have entered an invalid number of toppings")

#calculate the tax and total
tax = cost*0.13
total = cost*1.13

#display the subtotal, tax and total
print("Your subtotal is $", round(cost, 2))
print("Your tax will be $", round(tax, 2))
print("Your total cost is $", round(total, 2))