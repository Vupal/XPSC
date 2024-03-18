#include <bits/stdc++.h>
using namespace std;
#define ll long long int
void solve()
{
  int n,m;
  cin>>n>>m;
  int a[n+1],b[m+1];
  for(int i=0;i<n;i++) cin>>a[i];
  for(int i=0;i<m;i++) cin>>b[i];
  int l=0,r=0,al=0;
  int fl=0,fr=0;
  ll ansl=0,ansr=0;
  while(l<n){
      al=l;
      ll asl=0,ssl=0;
      while(a[al]==a[l] && al<n){
        asl++;
        al++;
      }
      while(b[r]<=a[l] && r<m){
         if(b[r]==a[l])ssl++;
         r++;
      }
      ansl+=asl*ssl;
     // cout<<asl<<" "<<ssl<<" "<<ansl<<endl;
      l+=asl;
  }
  
  cout<<ansl<<endl;

}
int main(){

  int t=1;
  while(t--)
  {

    solve();
  }


}