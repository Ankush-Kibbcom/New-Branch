package main
 
import "fmt"
 
func main() {
        fmt.Print("Enter First String: ")   //Print function is used to display output in same line
        var first string    
        fmt.Scanln(&first)                  // Take input from user
    fmt.Print("Enter Second String: ")
    var second string
    fmt.Scanln(&second)
        fmt.Print(first + second)           // Addition of two string   
}