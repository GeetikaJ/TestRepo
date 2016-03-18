package com.app;
import java.util.Scanner;

public class hello {
	public static void main(String[] args) {
		String name,pass;
		Scanner input;
		input = new Scanner(System.in);
		System.out.println("Enter your name:");
		name=input.nextLine();
		System.out.println("Enter your password :");
		pass=input.nextLine();
		
		if(name=="dipika" && pass=="dipika")
		System.out.println("Welcome"+name);
	}
}