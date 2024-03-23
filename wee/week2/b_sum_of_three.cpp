#include <bits/stdc++.h>
using namespace std;
#define ll long long int
void solve()
{
  
  int k,s;
  cin>>k>>s;
  int ans=0;
  for(int i=0;i<=k;i++){
    for(int j=0;j<=k;j++){
      int ss=s-i-j;
      if(ss>=0 && ss<=k){
        ans++;
      }
    }
  }
  cout<<ans<<endl;

}
int main(){

  int t=1;

  while(t--)
  {

    solve();
  }


}