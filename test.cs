//make an application that can be used to calculate the area of a circle, rectangle, and triangle.
//The application should have a menu with the following options:
//1. Calculate the area of a circle
//2. Calculate the area of a rectangle
//3. Calculate the area of a triangle
//4. Quit
//The user should be able to enter the radius or width and height of a circle, rectangle, or triangle.
//The application should display the area of the circle, rectangle, or triangle.
//The application should also display an error message if the user enters a negative number.
//The application should also display an error message if the user enters a number that is not a number.


using System;


namespace AreaOfShapes
{
    class Program
    {
        static void Main(string[] args)
        {
            
            Console.WriteLine("Welcome to the Area of Shapes Calculator!");
            Console.WriteLine("Please select the shape you would like to calculate the area of:");
            Console.WriteLine("1. Circle");
            Console.WriteLine("2. Rectangle");
            Console.WriteLine("3. Triangle");
            Console.WriteLine("4. Quit");
            Console.WriteLine("Please enter your selection:");
            string userInput = Console.ReadLine();
            int userInputInt = Convert.ToInt32(userInput);
            if (userInputInt == 1)
            {
                Console.WriteLine("Please enter the radius of the circle:");
                string userInput2 = Console.ReadLine();
                double userInput2Double = Convert.ToDouble(userInput2);
                double area = Math.PI * Math.Pow(userInput2Double, 2);
                Console.WriteLine("The area of the circle is: " + area);
            }
            else if (userInputInt == 2)
            {
                Console.WriteLine("Please enter the width of the rectangle:");
                string userInput2 = Console.ReadLine();
                double userInput2Double = Convert.ToDouble(userInput2);
                Console.WriteLine("Please enter the height of the rectangle:");
                string userInput3 = Console.ReadLine();
                double userInput3Double = Convert.ToDouble(userInput3);
                double area = userInput2Double * userInput3Double;
                Console.WriteLine("The area of the rectangle is: " + area);
            }
            else if (userInputInt == 3)
            {
                Console.WriteLine("Please enter the base of the triangle:");
                string userInput2 = Console.ReadLine();
                double userInput2Double = Convert.ToDouble(userInput2);
                Console.WriteLine("Please enter the height of the triangle:");
                string userInput3 = Console.ReadLine();
                double userInput3Double = Convert.ToDouble(userInput3);
                double area = (userInput2Double * userInput3Double) / 2;
                Console.WriteLine("The area of the triangle is: " + area);
            }
        }
    }
}


