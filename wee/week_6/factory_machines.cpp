#include <bits/stdc++.h>
using namespace std;
#define ll long long int
void solve()
{
   ll n,t;
  cin>>n>>t;
  vector<ll>v(n);
  for(ll i=0;i<n;i++) cin>>v[i];
  ll l=0,r=1e18,ans=1e18;
  while(l<=r){
     ll mid=(l+r)/2;
     ll a=0;
     for(ll i=0;i<n;i++){
       a+=min(mid/v[i],(ll)1e9);
      //  if(a>=t){
      //    ans=mid;
      //    break;
      //  }
     }
    if(a>=t){
       if(ans>mid) ans=mid;
       r=mid-1;
    }
    else l=mid+1;
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