package javaFundamentals;

public class HelloWorld {

	public static void main(String[] args) {
		
		
		int [] num = {11,2,5};
		int x = num[0];
		for (int i=0;i<num.length; i++) {
			if(num[i]>x)
				x = num[i];
		}
		System.out.println("maximum number is "+ x);
		
		
	}
	}
	


