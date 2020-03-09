import java.io.*;
import java.util.*;
class Arith
{
Scanner x = new Scanner(System.in);
int a,b,c;
Arith()
{
a = x.nextInt();
b =x.nextInt();
}
Arith(int d,int e)
{
a = d;
b = e;
}
void sum()
{
System.out.println("addition is"+(a+b));
}
public static void main(String args[])
{
Arith x = new Arith();
x.sum();
Arith y = new Arith(2,3);
y.sum();
}
}