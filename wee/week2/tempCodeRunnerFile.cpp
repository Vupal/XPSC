#include <bits/stdc++.h>
using namespace std;
#define ll long long int
void solve()
{
  
  string s,t;
  cin>>s>>t;

  int ans=0;
  for(int i=0;i<s.size();i++){
    if(s[i]!=t[i] )ans++;
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