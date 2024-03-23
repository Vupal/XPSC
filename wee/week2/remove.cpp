#include <bits/stdc++.h>
using namespace std;
#define ll long long int
void solve()
{
  int n,x;
  cin>>n>>x;
  int a[n+1];
  for(int i=0;i<n;i++)
  {
    cin>>a[i];
  }
  for(int i=0;i<n;i++){
    if(a[i]!=x){
      cout<<a[i]<<" ";
    }
  }
  cout<<endl;


}
int main(){

  int t=1;
  while(t--)
  {

    solve();
  }


}