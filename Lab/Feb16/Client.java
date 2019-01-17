import java.rmi.registry.LocateRegistry;
import java.rmi.registry.Registry;
import java.io.*;
import java.util.*;
public class Client {
private Client() {}
public static void main(String[] args) throws Exception {
	String s;
	int a,b;
	BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
	System.out.print("ENter String : ");
	s=br.readLine();
try {
Registry registry = LocateRegistry.getRegistry(null);
Hello stub = (Hello) registry.lookup("Hello");
int arr[]= stub.countCharacters(s);
int i;
System.out.println("Character Count");
for(i=0;i<250;i++)
{
	if(arr[i]>0)
	{
		System.out.println((char)i+ "----------->" + arr[i]);
	}
}
System.out.print('\n');
System.out.print("ENter Number 1 : ");
a=Integer.parseInt(br.readLine());
System.out.print("ENter Number 2 : ");
b=Integer.parseInt(br.readLine());
System.out.println("\nAddition is " + stub.add(a,b));
System.out.println("\nSubraction is " + stub.sub(a,b));
System.out.println("\nMultiplication is " + stub.mul(a,b));
System.out.println("\nDivision is " + stub.div(a,b));
} catch (Exception e) {
System.err.println("Client exception: " + e.toString());
e.printStackTrace();
}
}
}