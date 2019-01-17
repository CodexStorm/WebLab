import java.io.*;
import java.net.*;
public class client1{
public static void main(String[] args) throws Exception{
Socket s=new Socket("localhost",6666);
BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
DataOutputStream dout=new DataOutputStream(s.getOutputStream());
String str="";
while(true)
{
	System.out.print("Enter Message to pass : ");
	str=br.readLine();
	
dout.writeUTF(str);
dout.flush();
if(str.equals("close"))
{
	break;
}
}
s.close();
}
}