#include <bits/stdc++.h>
using namespace std;
#define ll long long int
void solve()
{
  
 int ans=0;
 int n,m;
 cin>>n>>m;
 int a[n+1],b[m+1];
 for(int i=0;i<n;i++) cin>>a[i];
 for(int j=0;j<m;j++) cin>>b[j];
 int l=0,r=0;
 while(r<m){
   while(b[r]>a[l] && l<n){
     l++;
     ans++;
   }
   r++;
   cout<<ans<<" ";
 }
 cout<<'\n';

}
int main(){

  int t=1;
  while(t--)
  {

    solve();
  }


}